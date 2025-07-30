<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prompt extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'nome',
        'prompt',
        'categoria_id',
        'descricao',
    ];

    // Relação com a categoria
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }
}
