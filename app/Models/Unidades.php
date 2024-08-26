<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidades extends Model
{
    protected $table = 'unidades';

    protected $guarded = ['id'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'unidade',
        'populacao_adstrita',
        'distancia_caf',
        'distancia_referencia_modulo',
        'funcionarios_responsaveis',
        'telefone',
        '[observacao]',
        'ativo'
    ];
}
