<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escola extends Model
{
    use HasFactory;

    //Laravel provides by default a protection against mass assignment security issues.
    //That's why you have to manually define which fields could be "mass assigned" :

    protected $fillable = ['escola_nome', 'escola_cep', 'escola_rua', 'escola_numero', 'escola_telefone', 'escola_email', 'escola_bairro'];

}
