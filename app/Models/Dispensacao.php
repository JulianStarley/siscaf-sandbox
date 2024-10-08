<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dispensacao extends Model
{
    use HasFactory;

    protected $table = 'dispensacoes';

    protected $guarded = ['id'];

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

     protected $fillable =
     [
        'quantidade_dispensada',
        'data_dispensacao',
        'consumos_itens',
     ];
}
