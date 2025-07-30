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

    public function store(Request $request){
        $regras = [
            'nome' => 'required',
            'descricao' => 'required|min:3|max:100'
        ];
        $feedback = [
          'nome.required' => 'O selecione qual é a categoria',
          'descricao.required' => 'O campo da descrição deve ~ser preenchido',
          'descricao.min' => 'O campo da descrição deve ter no mínimo 3 caracteres',
          'descricao.max' => 'O campo da descrição deve ter no máximo 100 caracteres',
        ];

        $request->validate($regras, $feedback);

        $categoria = Categoria::create($request->all());
        return response()->json($categoria, 201);
    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {
        $categoria = Categoria::find($id);

        if(!$categoria){
            return response()->json(['error' => 'Categoria nao encontrada'], 404);
        }

        $categoria->delete();
        return response()->json($categoria, 200);
    }
}
