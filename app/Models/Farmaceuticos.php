<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farmaceuticos extends Model
{
    protected $table = 'farmaceuticos';

    protected $guarded = ['id'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

     protected $fillable = [
        'cpf',
        'nome',
        'crf',
        'telefone',
        '[observacao]'
     ];
}
