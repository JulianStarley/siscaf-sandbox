<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consumos extends Model
{
    protected $table = 'consumos';

    protected $guarded = ['id'];


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'unidade_id',
        'data',
        'user_id',
        'consumos_itens'
    ];

    protected $casts = [
        'data' => 'date',
    ];

    public function unidade(){
        return $this->belongsTo(Unidades::class, 'unidade_id', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function consumos_itens(){
        return $this->hasMany(Consumos_itens::class, 'consumos_id', 'id');
    }
}
