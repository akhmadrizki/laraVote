<?php

use Illuminate\Database\Seeder;

use App\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = [
            'nama' => "Sudah Voting"
        ];
        Status::create($status);

        $status2 = [
            'nama' => "Belum Voting"
        ];
        Status::create($status2);
    }
}
