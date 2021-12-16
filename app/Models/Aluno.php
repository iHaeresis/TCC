<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Aluno extends Model
{
    use HasFactory;
   // use Sluggable;

    protected $fillable = [
        'aluno_nome',
        'aluno_sobrenome',
        'aluno_pai',
        'aluno_mae',
        'aluno_descricao1',
        'aluno_descricao2',
        'aluno_nascimento',
        'aluno_telefone',
        'aluno_email',
        'image_path',
       // 'slug',
        'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //
    //public function sluggable(): array
    //{
    //    return [
    //        'slug' => [
    //            'source' => 'aluno_nome'
    //        ]
    //    ];
    //}
}
