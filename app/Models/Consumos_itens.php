<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consumos_itens extends Model
{
    use HasFactory;

    protected $table = 'consumos_itens';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'medicamento_id',
        'consumos_id',
        'quantidade_consumida',
        'user_id',
        'user_exclusao_id',
        'excluido',
    ];

    public function medicamento(){
        return $this->belongsTo(Medicamentos::class, 'medicamento_id', 'id');
    }

    public function consumo(){
        return $this->belongsTo(Consumos::class, 'consumos_id', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
