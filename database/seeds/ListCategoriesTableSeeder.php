<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ListCategoriesTableSeeder extends Seeder
{

const DATA = array (
  0 =>
  array (
    'id' => '1',
    'category' => 'ekopinnat',
  ),
  1 =>
  array (
    'id' => '2',
    'category' => 'elämänpinnat',
  ),
  2 =>
  array (
    'id' => '3',
    'category' => 'pihapinnat',
  ),
  3 =>
  array (
    'id' => '4',
    'category' => 'vuodenpinnat',
  ),
  4 =>
  array (
    'id' => '5',
    'category' => 'maailmanpinnat',
  ),
  5 =>
  array (
    'id' => '6',
    'category' => 'Rovaniemenpinnat',
  ),
  6 =>
  array (
    'id' => '7',
    'category' => 'spondepinnat',
  ),
);
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('list_categories')->insert(self::DATA);
    	DB::table('list_categories')->update([
    	    'created_at' => Carbon::now(), 'updated_at' => Carbon::now()
    	]);
    }
}
