<?php

namespace App\Http\Controllers;

use App\Models\Depute; // Modèle Depute
use Illuminate\Http\Request;
use App\Models\Comission; // Modèle Comission

class DeputeController extends Controller
{
    public function index()
    {
        $deputes = Depute::all(); // Récupérer tous les députés
        return view('depute.index', compact('deputes'));
    }

    public function create()
    {
        $comissions = Comission::all(); // Récupérer toutes les commissions
        return view('depute.create', compact('comissions')); // Passer les commissions à la vue
    }

    public function store(Request $request)
    {
        $request->validate([ 
            "nom" => "required",
            "prenom" => "required",
            "naissance" => "required",
            "sexe" => "required|in:M,F",
            "lieu" => "required",
            "salaire" => "required",
            "prime" => "required",



          
            "comission_id" => "required",
        ]);

        $depute = new Depute();
        $depute->nom = $request->input('nom');
        $depute->prenom = $request->input('prenom');
        $depute->naissance = $request->input('naissance');
        $depute->sexe = $request->input('sexe');
        $depute->lieu = $request->input('lieu');

        $depute->salaire=$request->get('salaire');
        $depute->prime=$request->get('prime');


        $depute->comission_id = $request->input('comission_id');
        $depute->save();

        return redirect()->route("depute.index")->with('success', 'Enregistré avec succès');
    }

    public function edit($id)
    {
        $depute = Depute::findOrFail($id);
        $comissions = Comission::all();
        return view("depute.edit", compact("depute", "comissions")); // Correction ici
    }

    public function update(Request $request, $id)
    {
        $depute = Depute::findOrFail($id);
        $depute->nom = $request->get('nom');
        $depute->prenom = $request->get('prenom');
        $depute->naissance = $request->get('naissance');
        $depute->sexe = $request->get('sexe');
        $depute->lieu = $request->get('lieu');
        $depute->salaire = $request->get('salaire');
        $depute->prime = $request->get('prime');


        $depute->comission_id = $request->get('comission_id');
        $depute->save(); // Correction ici

        return redirect()->route("depute.index")->with('success', 'Mis à jour avec succès');
    }

    public function destroy($id)
    {
        $depute = Depute::find($id);
        if ($depute) {
            $depute->delete();
            return redirect()->route("depute.index")->with('success', 'Supprimé avec succès');
        }
        return redirect()->route("depute.index")->with('error', 'Député non trouvé');
    }
}