<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
     // public function filiere(Request $request){
    //         if(session()->has('idetudiant')){
    //             $filieres=filiere::all();
    //             $etudiant=etudiant::where('id',session('idetudiant'))->first();
    //             return view('admin.liste_choix_filiere', compact('filieres'),compact('etudiant'));
    //         }
    // }
    // $etudiantfiliere = DB::table('etudiantfiliere')
        //     ->select('etudiant.numapogee', 'etudiant.nom', 'etudiant.prenom', 'etudiant.moyenne', 'filiere.nom_filiere')
        //     ->join('etudiant', 'etudiantfiliere.etudiant_id', '=', 'etudiant.id')
        //     ->join('filiere', 'etudiantfiliere.filiere_id', '=', 'filiere.id')
        //     ->get();
        public function ajouterFiliereEtudiant($id) { 
            $etudiant = etudiant::findOrFail($id);
            $filieres = filiere::all()->except($etudiant->filiere_id);
            return view("pages.ajout_filiere", ['etudiant' => $etudiant, "filieres" => $filieres]);
        }

        public function postAjouterFiliereEtudiant(Request $req) { 
            /*$validator = Validator::make($req->all(), [
                'niveau'=>'required|max:255',
                'specialite'=>'required|max:255',
            ]);*/
           // if ($validator->fails()) {return redirect()->back()->withErrors(['Niveau ou specialité invalide']);}
           // if ($validator->fails()) {return redirect()->back()->withErrors(['Niveau ou spécialité invalide']);}  
            $etudiantfiliere = new etudiantfiliere([
                'etudiant_id' => $req['etudiant_id'],
                'filière_id' => $req['filiere']
            ]);
            $etudiantfiliere->save();
            session(['message' => 'La filière a bien été ajoutée à l\'étudiant']);
            return redirect('/profil');
        }

        public function supprimerFiliereEtudiant($etudiant_id, $filiere_id) {  
            $etudiantfiliere = etudiantfiliere::where('etudiant_id','=',$etudiant_id)->where('filière_id','=',$filiere_id)->delete();
            $etudiantfiliere = etudiantfiliere::where('etudiant_id','=',$etudiant_id)->where('filière_id','=',$filiere_id)->delete();
        }
}
