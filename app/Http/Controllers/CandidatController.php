<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use App\Http\Requests\StoreCandidatRequest;
use App\Http\Requests\UpdateCandidatRequest;
use App\Models\CandidatHasEmploi;
use Illuminate\Http\Request;

class CandidatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("user.index")->with("user",session('user'));
        //
    }
    public function candidatures()
    {
        return view("user.candidatures")->with("user",session('user'));
        //
    }

    public function test(CandidatHasEmploi $candidature)
    {
        // dd($candidature->offre);
        return view("user.test")->with(["offre"=>$candidature->offre,"candidature"=>$candidature]);
        //
    }

    public function resulttest(CandidatHasEmploi $candidature,$score)
    {
        // dd($score);
        $candidature->update(["score"=>$score,"status"=>"testok"]);
        return view("thanks2")->with(["offre"=>$candidature->offre,"candidature"=>$candidature]);
        //
    }




    public function loginview()
    {
        return view("login");
    }

    public function login(Request $request)
    {
        $user = Candidat::where("email", $request->email)->where("password", $request->password)->first();
        if ($user) {
            session(['user' => $user]);
            return redirect()->route("user.index");
        }

        return view("login");
    }

    public function logout()
    {
        session()->flush();
        return redirect("/");
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
    public function store(StoreCandidatRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Candidat $candidat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Candidat $candidat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCandidatRequest $request, Candidat $candidat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Candidat $candidat)
    {
        //
    }
}
