<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPessoa extends Model
{
    use HasFactory;

    protected $table = 'tipo_pessoa';

    protected $guarded = 'id';

    protected $fillable = [
        'tipo_pessoa'
    ];

    public function pessoas()
    {
        return  $this->hasMany(Pessoa::class);
    }
}
