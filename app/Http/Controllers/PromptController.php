<?php

namespace App\Http\Controllers;

use App\Models\Prompt;
use Illuminate\Http\Request;

class PromptController extends Controller
{
    public function store(Request $request){
        $regras = [
            'nome'=>'required|min:3|max:100',
            'prompt'=>'required|min:3|max:100',
            'categoria_id'=>'required|exists:categorias,id',
            'descricao'=>'required|min:3|max:100'
        ];
        $mensagens = [
            '*.required' => 'O campo :attribute deve ser preenchido',
            '*.min' => 'O campo :attribute deve ter no minimo 3 caracteres',
            '*.max' => 'O campo :attribute deve ter no maximo 100 caracteres',
            'categoria_id.exists' => 'A categoria selecionada é inválida'
        ];

        $dados = $request->validate($regras, $mensagens);

        $prompt = Prompt::create($dados);

        return response()->json($prompt, 201);
    }

    public function show($id){
        $prompt = Prompt::find(id);

        if(!$prompt){
            return response()->json(['error' => 'Prompt não encontrado'], 404);
        }

        return response()->json($prompt, 200);
    }

    public function update(Request $request, $id){
        $prompt = Prompt::find($id);

        if(!$prompt){
            return response()->json(['error' => 'Prompt não encontrado'], 404);
        }

        $regras = [
            'nome' => 'required|min:3|max:100',
            'categoria_id' => 'required|exists:categorias,id',
            'descricao' => 'required|min:3|max:100',
        ];

        $mensagens = [
            '*.required' => 'O campo :attribute deve ser preenchido',
            '*.min' => 'O campo :attribute deve ter no mínimo 3 caracteres',
            '*.max' => 'O campo :attribute deve ter no máximo 100 caracteres',
            'categoria_id.exists' => 'A categoria selecionada é inválida',
        ];

        $dados = $request->validate($regras, $mensagens);

        $prompt->update($dados);

        return response()->json($prompt, 200);
    }

    public function destroy($id){

        $prompt = Prompt::find($id);

        if(!$prompt){
            return response()->json(['error' => 'Prompt não encontrado'], 404);
        }

        $prompt->softDelete();

        return response()->json($prompt, 200);
    }
}
