<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $table  = 'pessoa';

    protected $guarded = 'id';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cpf',
        'nome',
        'telefone',
        'observacao',
        'user_id',
        'tipo_pessoa'
    ];

    protected $enumTipoPessoa = [
        'farmaceutico',
        'unidade'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
