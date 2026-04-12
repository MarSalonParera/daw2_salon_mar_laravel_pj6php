<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Organisme extends Model
{
    use HasFactory;

    protected $table = 'organismes';

    protected $fillable = [
        'titol_llibre',
        'codi_oficial',
        'nom_organisme',
        'tipus',
        'any_fundacio',
        'pressupost_anual',
        'pais_seu',
        'ciutat_seu',
        'data_creacio_registre',
        'nombre_empleats',
        'actiu',
        'web_oficial'
    ];
}