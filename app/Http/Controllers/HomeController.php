<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use App\Models\Education;
use App\Models\entreprise;
use App\Models\offre;
use App\Models\secteur;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $secteurs = secteur::all();
        $entreprises = entreprise::all();
        $offres = offre::where("status", 'publier')->with("secteur", 'entreprise')->get();
        return view('index', compact("entreprises", "secteurs", "offres"));
    }

    public function detailEmploi(offre $offre)
    {
        // dd($offre);
        return view('details', compact("offre"));
    }

    public function candidaterEmploi(offre $offre)
    {
        // dd($offre);
        return view('postule', compact("offre"));
    }



    public function emploi()
    {
        $offres = offre::where("status", 'publier')->with("secteur", 'entreprise')->get();

        return view('emploi', compact("offres"));
    }


    public function addcandidat(Request $request, offre $offre)
    {
        $noms = $request->noms;
        $date_naissance = $request->date_naissance;
        $lieu_naissance = $request->lieu_naissance;
        $genre = $request->genre;
        $sm = $request->sm;
        $profession = $request->profession;
        $contact = $request->contact;
        $email = $request->email;

        $password_string = '!@#$%*&abcdefghijklmnpqrstuwxyzABCDEFGHJKLMNPQRSTUWXYZ23456789';
        $password = substr(str_shuffle($password_string), 0, 6);

        $candidat = Candidat::where("email",$email)->first();
        if($candidat){
            return redirect()->back()->withErrors("Ce mail existe déjà, connectez vous");
        }

        $id_candidat = Candidat::insertGetId(["password"=>$password,"noms" => $noms, "date_naissance" => $date_naissance, "lieu_naissance" => $lieu_naissance,"genre" => $genre,"sm" => $sm,"profession" => $profession,"email" => $email,"contact" => $contact]);

        $experience = $request->experience;
        foreach ($experience as $exp) {
            Education::create(["libelle"=>$exp['title'],"duree"=>$exp['duration'],"entreprise"=>$exp['company'],"contrat"=>$exp['contract_type'],"idcandidat"=>$id_candidat]);
        }

        $education = $request->education;
        foreach ($education as $edu) {
            Education::create(["diplome"=>$edu['degree'],"annee"=>$edu['year'],"etablissement"=>$edu['institution'],"idcandidat"=>$id_candidat]);
        }

        

        return view('thanks', compact("offre"));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
