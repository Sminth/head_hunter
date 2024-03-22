<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    use HasFactory;


    public function educations(){
        return $this->hasMany(Education::class,"idcandidat");
    }

    public function experiences(){
        return $this->hasMany(Experience::class,"idcandidat");
    }
    public function candidatures(){
        return $this->hasMany(CandidatHasEmploi::class,"idcandidat");
    }
    

}



