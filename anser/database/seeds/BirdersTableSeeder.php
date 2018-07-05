<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BirdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

const DATA = array (
  0 =>
  array (
    'id' => '1',
    'name' => 'Jonna Niemi',
  ),
  1 =>
  array (
    'id' => '2',
    'name' => 'Heikki Punkka',
  ),
  2 =>
  array (
    'id' => '3',
    'name' => 'Kalle Rautio',
  ),
  3 =>
  array (
    'id' => '4',
    'name' => 'Emilia Tuovinen',
  ),
  4 =>
  array (
    'id' => '5',
    'name' => 'Sami Paavola',
  ),
  5 =>
  array (
    'id' => '6',
    'name' => 'Iivo Karlin',
  ),
  6 =>
  array (
    'id' => '7',
    'name' => 'Nella Stöckell',
  ),
  7 =>
  array (
    'id' => '8',
    'name' => 'Miisa Piirainen',
  ),
  8 =>
  array (
    'id' => '9',
    'name' => 'Teemu Kangas',
  ),
  9 =>
  array (
    'id' => '10',
    'name' => 'Juuso Hämäläinen',
  ),
  10 =>
  array (
    'id' => '11',
    'name' => 'Elina Hirvonen',
  ),
  11 =>
  array (
    'id' => '12',
    'name' => 'Jari Virtanen',
  ),
  12 =>
  array (
    'id' => '13',
    'name' => 'Niko Vuori',
  ),
  13 =>
  array (
    'id' => '14',
    'name' => 'Antti Ruonakoski',
  ),
  14 =>
  array (
    'id' => '15',
    'name' => 'Marko Aro',
  ),
  15 =>
  array (
    'id' => '16',
    'name' => 'Riku Häkki',
  ),
  16 =>
  array (
    'id' => '17',
    'name' => 'Risto Vainio',
  ),
  17 =>
  array (
    'id' => '18',
    'name' => 'Linda Lehto',
  ),
  18 =>
  array (
    'id' => '19',
    'name' => 'Kai Saarijärvi',
  ),
  19 =>
  array (
    'id' => '20',
    'name' => 'Peppi Räsänen',
  ),
);

    public function run()
    {
   //  	foreach (DATA as $ROW) {
   //  		foreach ($ROW as $key => $value) {
			// 	DB::table('birders')->insert([$key => $value]);
			// }
   //      }
    	DB::table('birders')->insert(self::DATA);
    	DB::table('birders')->update([
    	    'created_at' => Carbon::now(), 'updated_at' => Carbon::now()
    	]);
    }
}
