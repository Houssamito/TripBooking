<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
    'titre',
    'sous-titre',
    'Categorie',
    'description',
    'image',
    'image2',
    'image3',
    'prix',
    'Nombre_places',
    'Date',
    'Duree',
    'ResponsableAct',
    'Activite1',
    'Activite2',
    'Activite3',
    'inclus',
    'is_showing',
    'AvgRating' ]
    ;

    public $timestamps=false;
}
