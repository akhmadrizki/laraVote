<?php

use Illuminate\Database\Seeder;

use App\Voters;

class VotersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $voter = [
            'username' => 1801020011,
            'periode' => 1,
            'status' => 2
        ];
        Voters::create($voter);
    }
}
