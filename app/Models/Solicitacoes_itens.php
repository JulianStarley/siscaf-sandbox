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
        'solicitacoes_id',
        'quantidade_solicitada',
        'data_solicitacao',
        'quantidade_autorizada',
        'data_autorizacao',
        'usuario_autorizador_id',
        'consumo_estimado',
        'estoque_atual',
        'excluido',
        'user_exclusao_id',
        'data_exclusao',
    ];

    /**
     * Relationships
     */

    public function medicamento()
    {
        return $this->belongsTo(Medicamentos::class, 'medicamento_id');
    }

    public function solicitacao()
    {
        return $this->belongsTo(Solicitacoes::class, 'solicitacoes_id');
    }

    public function usuarioAutorizador()
    {
        return $this->belongsTo(User::class, 'usuario_autorizador_id');
    }

    public function userExclusao()
    {
        return $this->belongsTo(User::class, 'user_exclusao_id');
    }
}
