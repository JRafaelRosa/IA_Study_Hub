<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function form()
    {
        return view('site.login');
    }

    public function login(Request $request)
    {
        $response = Http::post(url('/api/login'), [
            'email' => $request->email,
            'password' => $request->password
        ]);

        if ($response->successful()) {
            return back()->with('success', 'Login bem-sucedido: ' . $response->json('token'));
        }

        return back()->with('error', 'Erro: ' . $response->json('message'));
    }
}
