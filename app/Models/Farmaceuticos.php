<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


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
        'pessoas_id',
        'crf',
        'observacao',
        'ativo',
     ];

     public function pessoas()
     {
        return $this->hasOne(Pessoa::class);
     }
}
