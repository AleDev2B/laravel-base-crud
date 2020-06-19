<?php
use App\Ristorante;
use Illuminate\Database\Seeder;

class RistorantiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Ristorante::class, 100) -> create();
    }
}
