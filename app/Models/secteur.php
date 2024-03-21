<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class secteur extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $table="sect45";

    protected $fillable = ["libelle", 'image'];
}
