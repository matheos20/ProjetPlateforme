<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jeu;
use Illuminate\Support\Facades\Auth;

class JeuxController extends Controller
{
    public function index()
    {
//        $jeux = Jeu::all();
//        return view('dashboard.jeux', compact('jeux'));
//
        $jeux = Jeu::where('user_id', Auth::id())->get();
        return view('dashboard.jeux', compact('jeux'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'choix1' => 'required|integer',
            'choix2' => 'required|integer',
            'choix3' => 'required|integer',
            'choix4' => 'required|integer',
            'jackpot' => 'required|integer',
        ]);

        $jeu = new Jeu();
        $jeu->choix1 = $request->choix1;
        $jeu->choix2 = $request->choix2;
        $jeu->choix3 = $request->choix3;
        $jeu->choix4 = $request->choix4;
        $jeu->jackpot = $request->jackpot;
        $jeu->user_id = auth()->id();
        $jeu->save();

        return redirect()->route('dashboard')->with('success', 'Jeu ajouté avec succès.');
    }

    public function update(Request $request, $id)
    {
        $jeu = Jeu::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        $request->validate([
            'choix1' => 'required|integer',
            'choix2' => 'required|integer',
            'choix3' => 'required|integer',
            'choix4' => 'required|integer',
            'jackpot' => 'required|integer',
        ]);
        $jeu->update($request->all());

//        $jeu = Jeu::findOrFail($id);
//        $jeu->update($request->all());

//        return redirect()->route('jeux.index')->with('success', 'Jeu modifié avec succès.');
        return redirect()->route('jeux.index')->with('success', 'Jeu modifié avec succès.');
    }

    public function destroy($id)
    {
//        $jeu = Jeu::findOrFail($id);
        $jeu = Jeu::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        $jeu->delete();
//        $jeu->delete();

//        return redirect()->route('jeux.index')->with('success', 'Jeu supprimé avec succès.');
        return redirect()->route('jeux.index')->with('success', 'Jeu supprimé avec succès.');
    }

}
