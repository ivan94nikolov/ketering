<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();
        $categoryRecords = [
        	['id'=>1, 'name'=>'First Category'],
        	['id'=>2, 'name'=>'First level 2 cat'],
        	['id'=>3, 'name'=>'First level 3 cat'],
        	['id'=>4, 'name'=>'Second level 2 cat'],
        	['id'=>5, 'name'=>'Second Category'],
        	['id'=>6, 'name'=>'Lets go'],
        ];
        foreach ($categoryRecords as $key => $record) {
        	\App\Models\Category::create($record);
        	        }
    }
}
