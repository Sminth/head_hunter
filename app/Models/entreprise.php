<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class entreprise extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $table="entre574";

    protected $fillable = ["libelle", 'adresse', 'image'];
}
