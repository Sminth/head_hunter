<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class offre extends Model
{
    use CrudTrait;
    use HasFactory;
    protected $table="off78";


    protected $fillable = ["libelle", 'salaire', 'image','description','adresse','idsecteur','identreprise','type','date_cloture'.'status'];


    function entreprise(){
       return $this->belongsTo(entreprise::class,'identreprise',"id");
    }

    function secteur(){
        return $this->belongsTo(secteur::class,'idsecteur',"id");
     }
}
