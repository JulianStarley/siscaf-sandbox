<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicamentos extends Model
{
    protected $table  = 'medicamentos';

    protected $guarded = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

     protected $fillable = [
        'medicamento',
        'codigo',
        'ativo',
        'quantidade',
        'validade',
        'lote',
        'cod_barras',
        'fator_embalagem',
        '[observacao]',
        'user_id'
     ];
}
