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

     use HasFactory;
    protected $fillable = [
        'tipo_farmacia',
        'unidade',
        'modulo',
        'funcionarios_responsaveis',
        'telefone',
        '[observacao]',
        'ativo'
    ];

    protected $casts = [
        'populacao_adstrita' => 'decimal:2',
        'distancia_caf' =>  'decimal:2',
        'distancia_referencia_modulo' =>  'decimal:2',
    ];

}
