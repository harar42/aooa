<?php

use Illuminate\Database\Seeder;

class CoordonneesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('coordonnees')->insert([
            ['ville' =>'Paris','latitude' =>'48.8566101','longitude' =>'2.3514992'],
            ['ville' =>'Lyon','latitude' =>'45.6963425','longitude' =>'4.735948'],
            ['ville' =>'Marseille','latitude' =>'43.2961743','longitude' =>'5.3699525'],
            ['ville' =>'Bordeaux','latitude' =>'44.841225','longitude' =>'-0.5800364'],
            ['ville' =>'Lille','latitude' =>'50.6305089','longitude' =>'3.0706414'],
            ['ville' =>'Strasbourg','latitude' =>'48.584614','longitude' =>'7.7507127'],
            ['ville' =>'Nantes','latitude' =>'47.2186371','longitude' =>'-1.5541362']
        ]);
    }
}
