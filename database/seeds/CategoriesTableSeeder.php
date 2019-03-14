<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['nom' =>'Accessoires auto-moto'],
            ['nom' =>'Alimentation'],
            ['nom' =>'Autres services'],
            ['nom' =>'Bien être'],
            ['nom' =>'Bon plans'],
            ['nom' =>'Boucherie'],
            ['nom' =>'Boulangerie'],
            ['nom' =>'Coach sportif'],
            ['nom' =>'Coiffures'],
            ['nom' =>'Cours'],
            ['nom' =>'Développement individuel'],
            ['nom' =>'Fast-food'],
            ['nom' =>'Finance'],
            ['nom' =>'Formation'],
            ['nom' =>'Jeux'],
            ['nom' =>'Langues'],
            ['nom' =>'Lavage automobiles'],
            ['nom' =>'Mécanique auto-moto'],
            ['nom' =>'Médecine'],
            ['nom' =>'Optique'],
            ['nom' =>'Restaurant'],
            ['nom' =>'Scooters'],
            ['nom' =>'Sport'],
            ['nom' =>'Sport de combats'],
            ['nom' =>'Transports'],
            ['nom' =>'Téléphonie'],
            ['nom' =>'Voitures'],
            ['nom' =>'Voyage'],
            ['nom' =>'Vélos'],
            ['nom' =>'Vêtements']
        ]);
    }
}
