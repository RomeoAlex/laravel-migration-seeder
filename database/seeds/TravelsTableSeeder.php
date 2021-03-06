<?php
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
//richiamo il model
use App\Travel;
class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //Creo x numero di viaggi nella tabella tramite il model
        for ($i = 0 ; $i < 10; $i++) { 
            $new_travel = new Travel();
            $new_travel->city = $faker->city();
            $new_travel->type = $faker->sentence();
            $new_travel->days_duration = $faker->randomDigit();
            $new_travel->departure_at = $faker->dateTime();
            $new_travel->description = $faker->sentence();
            $new_travel->available= rand(0 , 1);
            $new_travel->price =$faker->randomFloat(2);
            $new_travel->save();
        }
        
    }
}
