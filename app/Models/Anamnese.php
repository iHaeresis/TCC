<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anamnese extends Model
{
    use HasFactory;

    protected $fillable = [
        'anam_comportamento',
        'anam_independencia',
        'anam_psicomotor',
        'anam_alimentacao',
        'anam_infos',
        'anam_data',
        'aluno_id'];


    public function alunos()
    {
        return $this->belongsTo(Alunos::class);
    }
}



