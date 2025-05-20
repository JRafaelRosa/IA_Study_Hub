<?php

namespace App\Http\Controllers;

use App\Rules\CpfRule;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function login(Request $request)
    {
        $regras = [
            'email' => 'required|email',
            'password' => 'required'
        ];

        $feedback = [
            'email.required' => 'Preencha o campo email',
            'email.email' => 'Preencha um email válido',
            'password.required' => 'Preencha o campo senha'
        ];

        // Validação dos dados
        $request->validate($regras, $feedback);

        $email = $request->input('email');
        $senha = $request->input('password');

        // Buscar usuário pelo email
        $user = User::where('email', $email)->first();

        // Verifica usuário e senha
        if ($user && Hash::check($senha, $user->password)) {
            auth()->login($user);
            return response()->json(['message' => 'Usuário autenticado com sucesso']);
        }

        return response()->json(['error' => 'Credenciais inválidas'], 401);
    }



    public function store(Request $request){
        $regras = [
            'name' => 'required|min:3|max:100',
            'email' => 'required|email|unique:users',
            'cpf' => ['required', 'size:14', 'unique:users', new CpfRule()],
            'telefone' => 'required|min:11|max:20|unique:users',
            'password' => 'required|min:6',
        ];

        $feedback = [
            'required' => 'O campo :attribute é obrigatório.',
            'email.email' => 'O email informado não é válido.',
            'email.unique' => 'Este email já está em uso.',
            'cpf.unique' => 'Este CPF já está em uso.',
            'telefone.unique' => 'Este telefone já está em uso.',
            'cpf.size' => 'O CPF deve ter exatamente 14 caracteres.',
            'name.min' => 'O nome deve ter no mínimo 3 caracteres.',
            'password.min' => 'A senha deve ter no mínimo 6 caracteres.',
        ];

        $request->validate($regras, $feedback);

        $user = $this->user->create($request->all());
        return response()->json($user, 201);
    }

    public function logout(Request $request){

        if(auth()->check()){
            auth()->logout();
            return response()->json(['message' => 'Logout realizado com sucesso'], 200);
        }
        return response()->json(['message' => 'Não á um usuario logado'], 400);
    }
}
