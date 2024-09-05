<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Solicitacoes extends Model
{
   protected $table = 'solicitacoes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
   protected $guarded = ['id'];

   protected $fillable = [
    'unidade_id',
    'farmaceutico_id',
    'medicamento_id',
    'data_solicitacao',
    'numero_solicitacao',
    'estado_solicitacao',
    'observacao',
    'user_id',
    'excluido',
    'user_exclusao_id',
    'data_exclusao',
];

public function unidade()
{
    return $this->belongsTo(Unidades::class);
}

public function farmaceutico()
{
    return $this->belongsTo(Farmaceuticos::class);
}

public function medicamento()
{
    return $this->belongsTo(Medicamentos::class);
}

public function user()
{
    return $this->belongsTo(User::class);
}

public function userExclusao()
{
    return $this->belongsTo(User::class, 'user_exclusao_id');
}

public function itens(){
    return $this->hasMany(Solicitacoes_itens::class);
}
}
