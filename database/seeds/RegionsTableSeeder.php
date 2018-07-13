<?php

use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Region::class, 10)->create()->each(function ($r) {
        	for($i=0;$i<10;$i++){
        		$r->districts()->save(factory(App\District::class)->make());
        		
        		$district = App\District::orderBy('id','desc')->first();

        		for($ii=0;$ii<8;$ii++){
        			$district->towns()->save(factory(App\Town::class)->make());

        			$town = App\Town::orderBy('id','desc')->first();

	        		for($ii=0;$ii<5;$ii++){
	        			$town->residences()->save(factory(App\Residence::class)->make());
	        			$town->placeOfBirths()->save(factory(App\PlaceOfBirth::class)->make());
	        		}
        		}
        	}
        });
    }
}
