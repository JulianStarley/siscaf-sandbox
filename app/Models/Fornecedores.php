<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedores extends Model
{
    use HasFactory;
    protected $table  = 'pessoas';

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
        'tipo_pessoa_id',
        'users_id',
    ];
}
