<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoUnidade extends Model
{
    use HasFactory;

    protected $table = 'tipo_unidade';

    protected $guarded = 'id';

    protected $fillable = [
        'tipo_unidade'
    ];

    public function unidades()
    {
        return $this->hasMany(Unidades::class);
    }
}
