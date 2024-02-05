<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\utilisateur; 
use App\Models\filiere; 
use App\Models\etudiant; 
use App\Models\etudiantfiliere; 
use Hash;

class connexionController extends Controller
{
    public function connexionPage()
    {
        return view('admin.connexion');
    }
    public function loginadmin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required', 
            'droite' => 'required',
        ]);
        $user = utilisateur::where('email', '=', $request->email)
        ->where('password', '=', $request->password)
        ->where('droite', '=', $request->droite)
        ->first();

        if ($user) {
            $request->session()->put('id', $user->id);
            // dd($request->session()->all());
            // dd('la clé"id"est présente dans la session',$request->session()->all());
            if ($request->session()->has('id')) {
                return $this->liste_choix_fiiere();
            }
        } else {
            return back()->with('error', 'Identifiant utilisateur ou mot de passe incorrect');
        }
    }
    public function valider(){
        return view('liste_choix_filiere');
    }
    public function liste_choix_fiiere(){
        $filieres= filiere::all();
        return view("admin.liste_choix_filiere")->withFilieres('filiere',$filieres);
        
    }
   
    public function etudiantfiliere(): View
    {
         if(session()->has('etudiant_id ') && !session()->has('filiere_id')){
        $etudiantfiliere = DB::table('etudiantfiliere as ef')
            ->join('etudiant as e', 'ef.etudiant_id', '=', 'e.id')
            ->join('filiere as f', 'ef.filiere_id', '=', 'f.id')
            ->select('e.numapogee', 'e.nom', 'e.prenom', 'e.moyenne', 'f.nom_filiere')
           ->get();
    
        }
        // if (session()->has('etudiant_id') && !session()->has('filiere_id')) {
        //     $etudiant = Etudiant::find(session('etudiant_id'));
    
        //     if ($etudiant) {
        //         $etudiantFiliere = $etudiant->filieres()
        //             ->select('etudiant.numapogee', 'etudiant.nom', 'etudiant.prenom', 'etudiant.moyenne', 'filiere.nom_filiere')
        //             ->get();
    
        //         return $etudiantFiliere;
        //     }
        // }
        if (session()->has('etudiant_id') && !session()->has('filiere_id')) {
            $etudiant = Etudiant::find(session('etudiant_id'));
    
            if ($etudiant) {
                // Affiche les informations de l'étudiant pour le débogage
                dd($etudiant->toArray());
    
                $etudiantFiliere = $etudiant->filieres()
                    ->select('etudiants.numapogee', 'etudiants.nom', 'etudiants.prenom', 'etudiants.moyenne', 'filieres.nom_filiere')
                    ->get();
    
                // Affiche les informations de la relation pour le débogage
                dd($etudiantFiliere->toArray());
    
                return $etudiantFiliere;
            } else {
                // Affiche un message si l'étudiant n'est pas trouvé
                dd("Étudiant non trouvé pour l'id : " . session('etudiant_id'));
            }
        }
    
        // Affiche un message si les conditions ne sont pas remplies
        dd("Conditions non remplies");
        return null;
   
    }
}