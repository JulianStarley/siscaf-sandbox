<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estoques extends Model
{
    use HasFactory;

    protected $table =  'estoques';

    protected $guarded = ['id'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'quantidade',
        'fabricacao',
        'validade',
        'lote',
        'cod_barras',
        'fator_embalagem',

    ];

    public function medicamentos()
    {
        return $this->hasMany(Medicamentos::class);
    }
}
