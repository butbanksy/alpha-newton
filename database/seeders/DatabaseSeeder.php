<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $matieres = [[
            "nom" => "Maths",
            "prix" => 150,
            "niveau" => "college"
        ], [
            "nom" => "Physique",
            "prix" => 150,
            "niveau" => "college"
        ], [
            "nom" => "Français",
            "prix" => 150,
            "niveau" => "college"
        ], [
            "nom" => "S.V.T",
            "prix" => 150,
            "niveau" => "college"
        ], [
            "nom" => "Maths",
            "prix" => 200,
            "niveau" => "5eme"
        ], [
            "nom" => "Physique",
            "prix" => 200,
            "niveau" => "5eme"
        ], [
            "nom" => "Français",
            "prix" => 200,
            "niveau" => "5eme"
        ], [
            "nom" => "S.V.T",
            "prix" => 200,
            "niveau" => "5eme"
        ], [
            "nom" => "Anglais",
            "prix" => 200,
            "niveau" => "5eme"
        ], [
            "nom" => "Maths",
            "prix" => 250,
            "niveau" => "6eme"
        ], [
            "nom" => "Physique",
            "prix" => 250,
            "niveau" => "6eme"
        ], [
            "nom" => "Français",
            "prix" => 250,
            "niveau" => "6eme"
        ], [
            "nom" => "S.V.T",
            "prix" => 250,
            "niveau" => "6eme"
        ], [
            "nom" => "Arabe",
            "prix" => 250,
            "niveau" => "6eme"
        ], [
            "nom" => "Histoire-Géographie",
            "prix" => 250,
            "niveau" => "6eme"
        ], [
            "nom" => "Maths",
            "prix" => 250,
            "niveau" => "bacar"
        ], [
            "nom" => "Physique",
            "prix" => 250,
            "niveau" => "bacar"
        ], [
            "nom" => "S.V.T",
            "prix" => 250,
            "niveau" => "bacar"
        ], [
            "nom" => "Anglais",
            "prix" => 250,
            "niveau" => "bacar"
        ], [
            "nom" => "Philosophie",
            "prix" => 250,
            "niveau" => "bacar"
        ], [
            "nom" => "Science de l'ingénierie",
            "prix" => 250,
            "niveau" => "bacar"
        ],  [
            "nom" => "Maths",
            "prix" => 300,
            "niveau" => "bacfr"
        ], [
            "nom" => "Physique",
            "prix" => 300,
            "niveau" => "bacfr"
        ], [
            "nom" => "S.V.T",
            "prix" => 300,
            "niveau" => "bacfr"
        ], [
            "nom" => "Anglais",
            "prix" => 300,
            "niveau" => "bacfr"
        ], [
            "nom" => "Philosophie",
            "prix" => 300,
            "niveau" => "bacfr"
        ], [
            "nom" => "Science de l'ingénierie",
            "prix" => 300,
            "niveau" => "bacfr"
        ]];

        DB::table('matieres')->insert($matieres);

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin',
            'password' => Hash::make('admin'),
        ]);
    }
}
