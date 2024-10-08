<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidade extends Model
{
    use HasFactory;

    protected $table = 'unidadeS';

    protected $guarded = ['id'];

    protected $fillable = [
        'tipo_unidade',
        'unidade',
        'modulo',
        'ativo',
        'observacao',
        'populacao_adstrita',
        'distancia_caf',
        'distancia_referencia_modulo',
        'funcionarios_responsaveis',
    ];
}
