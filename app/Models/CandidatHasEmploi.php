<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidatHasEmploi extends Model
{
    use HasFactory;

    protected $fillable =["status","score"];

    public function offre(){
        return $this->belongsTo(offre::class,'idoffre');
    }

    public function candidat(){
        return $this->belongsTo(Candidat::class,'idcandidat');
    }
}
