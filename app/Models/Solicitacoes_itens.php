<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitacoes_itens extends Model
{
    protected $table = 'solicitacao_itens';

    protected $guarded = ['id'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'medicamento_id',
        'solicitacoes_id'
    ];

}
