<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function listar(){
        return response()->json(Categoria::all(), 200);
    }

    public function showCategoria($id){
        $categoria = Categoria::find($id);
        if(!$categoria){
            return response()->json(['error' => 'Categoria nao encontrada'], 404);
        }

        return response()->json($categoria::find($id), 200);
    }
}
