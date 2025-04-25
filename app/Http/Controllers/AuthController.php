<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Notifications\ConfirmAccount;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{


    public function showAuthPage()
    {
        return view('auth.form');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (!Auth::attempt($credentials)) {
            return redirect()->back()->with('error_login', 'Identifiants invalides.');
        }

        $user = Auth::user();

        if (!$user->is_verified) {
            Auth::logout();
            return redirect()->back()->with('error_login', 'Votre compte n\'est pas encore confirmé. Vérifiez votre e-mail.');
        }
    }



//        if (Auth::attempt($credentials)) {
//            return redirect()->intended('/dashboard');
//        }
//
//        return back()->with('error_login', 'Email ou mot de passe incorrect');
//    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'role' => 'required|in:client,jeux,cooperative,commerciale,docteur'
        ]);

        $code = strtoupper(Str::random(6));

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'confirmation_code' => $code,
            'is_confirmed' => false
        ]);

        $user->notify(new ConfirmAccount($code));

        //Auth::login($user);
        //return redirect('/dashboard');

      //  return redirect()->back()->with('message', 'Inscription réussie ! Vérifiez votre e-mail pour confirmer votre compte.');
        return redirect()->route('auth.page')->with([
            'message' => 'Inscription réussie ! Vérifiez votre e-mail pour confirmer votre compte.',
            'need_confirmation' => true,
            'email' => $request->email
        ]);


    }


        public function confirmCode(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'code' => 'required|string'
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->with('error_confirm', 'Utilisateur introuvable.');
        }

        if ($user->confirmation_code === $request->code) {
            $user->email_verified_at = now();
            $user->confirmation_code = null;
            $user->save();

            Auth::login($user); // connecte automatiquement

            return redirect()->route('dashboard');
        } else {
            return back()->with('error_confirm', 'Code invalide.');
        }
    }



//        $request->validate([
//            'email' => 'required|email',
//            'code' => 'required|string',
//        ]);
//
//        $user = User::where('email', $request->email)
//            ->where('confirmation_code', $request->code)
//            ->first();
//
//        if ($user) {
//            $user->confirmation_code = null;
//            $user->is_verified = true;
//            $user->save();
//
//            return redirect()->back()->with('success_confirm', 'Votre compte a été confirmé avec succès.');
//        } else {
//            return redirect()->back()->with('error_confirm', 'Code incorrect ou utilisateur introuvable.');
//        }


    public function resendCode(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->with('error_confirm', 'Utilisateur non trouvé.');
        }

        $code = Str::random(6);
        $user->confirmation_code = $code;
        $user->save();

        Mail::to($user->email)->send(new \App\Mail\ConfirmCodeMail($code));

        return back()->with('success_confirm', 'Nouveau code envoyé à votre adresse e-mail.');
    }


    public function logout()
    {
        Auth::logout();
        return redirect('/auth');
    }

    public function dashboard()
    {
        $role = auth()->user()->role;

        switch ($role) {
            case 'client':
                return view('dashboard.client');
            case 'jeux':
                return view('dashboard.jeux');
            case 'cooperative':
                return view('dashboard.cooperative');
            case 'commerciale':
                return view('dashboard.commerciale');
            case 'docteur':
                return view('dashboard.docteur');
            default:
                abort(403);
        }
    }
}
