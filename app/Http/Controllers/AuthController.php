<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Jeu;
use App\Notifications\ConfirmAccount;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function showAuthPage()
    {
        return view('auth.form');
    }
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'role' => 'required|in:client,jeux,cooperative,commerciale,docteur',
        ]);

        $code = strtoupper(Str::random(6));

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'confirmation_code' => $code,
            'is_confirmed' => false,
        ]);

        $user->notify(new ConfirmAccount($code));

        return redirect()->route('auth.page')->with([
            'message' => 'Inscription réussie ! Vérifiez votre e-mail pour confirmer votre compte.',
            'need_confirmation' => true,
            'email' => $request->email,
        ]);
    }


    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (!Auth::attempt($credentials)) {
            return redirect()->back()->with('error_login', 'Identifiants invalides.');
        }

        $user = Auth::user();

        if (!$user->is_confirmed || !$user->email_verified_at) {
            Auth::logout();
            return redirect()->back()->with('error_login', 'Votre compte n\'est pas encore confirmé. Vérifiez votre e-mail.');
        }

        return redirect()->route('dashboard');
    }
    public function confirmCode(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'code' => 'required|string',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->with('error_confirm', 'Utilisateur introuvable.');
        }

        if ($user->confirmation_code === $request->code) {
            $user->email_verified_at = now();
            $user->is_confirmed = true;
            $user->confirmation_code = null;
            $user->save();

            Auth::login($user);

            return redirect()->route('dashboard')->with('success', 'Compte confirmé avec succès.');
        }

        return back()->with('error_confirm', 'Code invalide.');
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
                $jeux = Jeu::where('user_id', auth()->id())->get();
                return view('dashboard.jeux', compact('jeux'));
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
