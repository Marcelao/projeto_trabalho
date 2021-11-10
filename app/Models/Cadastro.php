<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cadastro extends Model
{
    protected $table = "cadastro";
    protected $primaryKey = "id_cadastro";
    protected $fillable = [
        'nome', 'data', 'valor'
    ];
}
