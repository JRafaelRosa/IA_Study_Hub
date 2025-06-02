<?php


namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Permissao;


class PermissaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permissao::create(['permissao' => Permissao::USER]);
        Permissao::create(['permissao' => Permissao::ADMIN]);
    }
}
