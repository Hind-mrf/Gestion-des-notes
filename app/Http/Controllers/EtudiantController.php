<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
use App\Models\Matiere;

class EtudiantController extends Controller
{
    function etudiants(){
        return view('listeEtudiants')->with('etudiants',etudiant::all());
    }
    function ajouterEtu(Request $r){
        $etu = new Etudiant();
        $etu->nom = $r->nom;
        $etu->prenom = $r->prenom;
        $etu->dateNaiss = $r->dateNaiss;
        $etu->sexe = $r->sexe;
        $etu->save();
        return view('listeEtudiants')->with('etudiants',etudiant::all());
    }

    function supprimerEtu(Request $r){
        (etudiant::find($r->id))->delete();
        return view('listeEtudiants')->with('etudiants',etudiant::all());
    }

    function trouverEtu(Request $r){
        return view('modifierEtu')->with('etudiant',etudiant::find($r->id));
    }

    function modifierEtu(Request $r){
        $etu = etudiant::find($r->id);
        $etu->nom = $r->nom;
        $etu->prenom = $r->prenom;
        $etu->dateNaiss = $r->dateNaiss;
        $etu->sexe = $r->sexe;
        $etu->save();
        return view('listeEtudiants')->with('etudiants',etudiant::all());
    }

    function note(){
        return view('ajouterNote')
        ->with('etudiants',etudiant::all())
        ->with('matieres',matiere::all());
    }
    
    function ajouterNote(Request $r){
        $etu = etudiant::find($r->id_etu);
        $etu->matieres()->attach($r->id_mat,['note'=>$r->note,'observation'=>$r->observation]);
        return view('pageAcc');
    }

    function infoEtu(Request $r){
        $etu = etudiant::find($r->id);
        $info = $etu::with('matieres')->where('id',$r->id)->get();
        return view('etudiantNote')->with('etu',$etu)->with('info',$info);
    }

    function resultat(Request $r){
        $etu = etudiant::find($r->id);
        $info = $etu::with('matieres')->where('id',$r->id)->get();
        return view('resultatFinal')->with('etu',$etu)->with('info',$info);
    }
}
