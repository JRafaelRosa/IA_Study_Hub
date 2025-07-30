<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::create([
            'nome' => Categoria::CHAT_BOX,
            'descricao' => 'Prompts para chatbox, Chat-GPT, Gemini, Copilot, etc'
        ]);

        Categoria::create([
            'nome' => Categoria::IMAGES,
            'descricao' => 'Prompts para criação de imagens, Leonardo-AI, Chat-GPT, Gemini, etc'
        ]);

        Categoria::create([
            'nome' => Categoria::VIDEO,
            'descricao' => 'Prompts para criação de vídeos, Gemini, Adobe Firefly, etc'
        ]);

        Categoria::create([
            'nome' => Categoria::PROGRAMACAO,
            'descricao' => 'Prompts para programação, Claude Sonnet, Copilot, Chat-GPT, etc'
        ]);

        Categoria::create([
            'nome' => Categoria::OUTROS,
            'descricao' => 'Prompts para outras ultilizações'
        ]);
    }
}
