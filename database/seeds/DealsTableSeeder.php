<?php

use Illuminate\Database\Seeder;

class DealsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('deals')->insert([
            ['title' =>'Burgers','description' =>'Fondue savoyarde ou bourguignonne pour 2 ou 4 personnes avec kir au vin dès 19,99 € à l\'Auberge Notre-Dame','promotion' =>'promotion ','partner_id' => '1'],
            ['title' =>'Desserts','description' =>'Pause gourmande avec des crêpes au choix ou un grand Bubble Waffle à savourer à en couple ou entre amis','promotion' =>'promotion ','partner_id' => '1'],
            ['title' =>'Naruto','description' =>'Crêpes ou grand Bubble Waffle pour 2, 4 ou 6 personnes dès 9,90 € chez Fais Ta Bubble','promotion' =>'promotion ','partner_id' => '1'],
        ]);
    }
}
