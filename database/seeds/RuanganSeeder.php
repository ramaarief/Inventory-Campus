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
        $listRuangan = [
            ['jurusan_id' => '1',   'name' => 'TI-001'],
            ['jurusan_id' => '1',   'name' => 'TI-004'],

            ['jurusan_id' => '4',   'name' => 'HK-238'],

            ['jurusan_id' => '10',  'name' => 'PB-012'],

            ['jurusan_id' => '13',  'name' => 'SP-055'],

            ['jurusan_id' => '15',  'name' => 'KM-023']
        ];

        foreach ($listRuangan as $ruangan) {
        	Ruangan::create($ruangan);
        }
    }
}
