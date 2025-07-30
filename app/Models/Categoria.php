<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;

class Categoria extends Model
{
    const CHAT_BOX = 'chatbox';
    const IMAGES = 'images';
    const VIDEO = 'video';

    const PROGRAMACAO  = 'programacao';

    const OUTROS = 'outros';

    protected $table = 'categorias';
    protected $fillable = ['nome', 'descricao'];
}
