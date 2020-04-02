<?php

use Illuminate\Database\Seeder;
use App\Ruangan;

class RuanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listRuangan = ['R_001', 'R_002', 'R_003', 'R_004', 'R_005'];

        foreach ($listRuangan as $ruangan) {
        	Ruangan::create(['name' => $ruangan]);
        }
    }
}
