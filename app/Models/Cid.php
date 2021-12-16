<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cid extends Model
{
    use HasFactory;

    protected $fillable = ['cid_nome', 'cid_codigo', 'cid_descricao'];


}
