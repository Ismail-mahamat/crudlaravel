<?php

namespace App\Http\Controllers;
use App\Models\Comission;
use Illuminate\Http\Request;

class ComissionController extends Controller
{
   
    public function index()
    {
        $comissions = Comission::all();
        return view('comission.index', compact("comissions"));
    }

    public function create()
    {
        $comissions = Comission::all();
        return view('comission.create', compact("comissions"));
    }

    public function store(Request $request)
    {
        $request->validate([ 
            "nomc" => "required",
            "budget" => "required",
        ]);
        
        $comission = new Comission();
        $comission->nomc = $request->input('nomc');
        $comission->budget = $request->input('budget');
       
        $comission->save();
        return redirect()->route("comission.index")->with('success', 'enregistré avec succès'); 
    }

    public function edit($id)
    {
        $comission = Comission::findOrFail($id);
        return view('comission.edit', compact("comission"));
    }

    public function update(Request $request, $id)
    {
        $comission = Comission::findOrFail($id);
        $comission->nomc = $request->get('nomc');
        $comission->budget = $request->get('budget');
        $comission->update();
        return redirect()->route("comission.index");
    }

    public function destroy($id)
    {
        Comission::find($id)->delete();
        return redirect()->route("comission.index");
    }
}