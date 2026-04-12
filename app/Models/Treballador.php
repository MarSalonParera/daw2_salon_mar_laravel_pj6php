<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Treballador extends Model
{
    use HasFactory;

    protected $table = 'treballadors';

    protected $fillable = [
        'nom','cognoms','nif','data_naixement','sexe','adressa',
        'tlf_fixe','tlf_mobil','email','fotografia','treball_distancia',
        'tipus_contracte','data_contractacio','categoria','nom_feina','sou'
    ];
}
