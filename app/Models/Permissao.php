<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permissao extends Model
{
    const USER = 'user';
    const ADMIN = 'admin';

    protected $table = 'permissoes';
}
