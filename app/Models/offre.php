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

    public function openCandidats($crud = false)
    {
        return '<a class="btn btn-sm btn-link" target="_blank" href="/emploi/'.$this->id.'/candidats" data-toggle="tooltip" title="Just a demo custom button."><i class="la la-eye"></i> Candidats ('.$this->nombre_candidats($this->id).')</a>';
    }

    protected $fillable = ["libelle", 'salaire', 'image','description','adresse','idsecteur','identreprise','type','date_cloture'.'status'];


    function entreprise(){
       return $this->belongsTo(entreprise::class,'identreprise',"id");
    }

    function secteur(){
        return $this->belongsTo(secteur::class,'idsecteur',"id");
     }

     function nombre_candidats($id){
        return  count(CandidatHasEmploi::where("idoffre",$id)->get());
     }
}
