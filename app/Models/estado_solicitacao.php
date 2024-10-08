<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado_solicitacao extends Model
{
    use HasFactory;

    protected $table = 'estado_solicitacao';

    protected $guarded  = ['id'];


     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

     protected $fillable =
     [
        'estado_solicitacao',
     ];
}
