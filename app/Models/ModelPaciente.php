<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelPaciente extends Model
{
    protected $table = 'pacientes';

    protected $fillable = ['name', 'nasc', 'sexo']; //Permissão do laravel para inserir os campos listados
}
