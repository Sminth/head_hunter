<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use App\Models\CandidatHasEmploi;
use App\Models\Education;
use App\Models\entreprise;
use App\Models\Experience;
use App\Models\offre;
use App\Models\secteur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Exception;

class HomeController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Add some alerts and flash them to the session.
        // \Alert::success('You have successfully logged in')->flash();

        //         \Alert::add('error', 'Error message');

        //         \Alert::add('info', 'This is a blue bubble.');


        $secteurs = secteur::all();

        $entreprises = entreprise::all();
        // dd($entreprises[0]->offres);
        $offres = offre::where("status", 'publier')->with("secteur", 'entreprise')->take(6)->orderByDesc('id')->get();
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

    public function candidatsEmploi(offre $offre)
    {
        $cand = CandidatHasEmploi::where("idoffre",$offre->id)->get();


        return view('candidats', compact("offre",'cand'));
    }

    public function accepte(CandidatHasEmploi $candidature)
    {
        // $cand = CandidatHasEmploi::where("idoffre",$offre->id)->where("idcandidat",$candidat->id)->first();
        $candidature->update(["status"=>"test"]);
        $candidat = $candidature->candidat;
        // dd($candidat);

        $resultat['email'] = $candidat->email;
        $resultat['password'] = $candidat->password;
        try {


            Mail::send(
                'user.email_test',
                compact('resultat'),
                function ($message) use ($candidat) {
                    $message->from('contact@akilyum.com');
                    $message->to($candidat->email);
                    $message->subject('Candidature accepter');

                }
            );
        } catch (Exception) {
        }

            // dd($candidature);

        return redirect()->back();
    }




    public function emploi()
    {
        if (isset($_GET['idsecteur']) && $_GET['idsecteur']) {
            $offres = offre::where("status", 'publier')->where('idsecteur', $_GET['idsecteur'])->with("secteur", 'entreprise')->paginate(6);
            // dd($offres);
        }
        else if (isset($_GET['identreprise']) && $_GET['identreprise']) {
            $offres = offre::where("status", 'publier')->where('identreprise', $_GET['identreprise'])->with("secteur", 'entreprise')->paginate(6);
        } else {

            $offres = offre::where("status", 'publier')->with("secteur", 'entreprise')->paginate(6);
        }

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
        // dd($noms);
        $candidat = Candidat::where("email", $email)->first();
        if ($candidat) {
            return redirect()->back()->withErrors("Ce mail existe déjà, connectez vous");
        }

        $id_candidat = Candidat::insertGetId(["created_at" => now(), "password" => $password, "noms" => $noms, "date_naissance" => $date_naissance, "lieu_naissance" => $lieu_naissance, "genre" => $genre, "sm" => $sm, "profession" => $profession, "email" => $email, "contact" => $contact]);

        $experience = $request->experience;
        foreach ($experience as $exp) {
            Experience::insert(["libelle" => $exp['title'], "duree" => $exp['duration'], "entreprise" => $exp['company'], "contrat" => $exp['contract_type'], "idcandidat" => $id_candidat]);
        }

        $education = $request->education;
        foreach ($education as $edu) {
            Education::insert(["diplome" => $edu['degree'], "annee" => $edu['year'], "etablissement" => $edu['institution'], "idcandidat" => $id_candidat]);
        }

        CandidatHasEmploi::insert(["idcandidat" => $id_candidat, "idoffre" => $offre->id]);

        return redirect()->view('thanks', compact("offre"));
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
