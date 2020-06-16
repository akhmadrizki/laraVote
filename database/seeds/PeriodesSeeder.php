<?php

use Illuminate\Database\Seeder;

use App\Periode;

class PeriodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $periode = [
            'tahun' => '2019-2020',
        ];
        Periode::create($periode);
    }
}
