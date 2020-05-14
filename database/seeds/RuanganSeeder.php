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
            ['jurusan_id' => '1',   'name' => 'TI-002'],
            ['jurusan_id' => '1',   'name' => 'TI-003'],
            ['jurusan_id' => '1',   'name' => 'TI-004'],

            ['jurusan_id' => '4',   'name' => 'HK-231'],
            ['jurusan_id' => '4',   'name' => 'HK-232'],

            ['jurusan_id' => '5',   'name' => 'PB-012'],
            ['jurusan_id' => '5',   'name' => 'PB-013'],
            ['jurusan_id' => '5',   'name' => 'PB-014'],

            ['jurusan_id' => '8',  'name' => 'SP-045'],
            ['jurusan_id' => '8',  'name' => 'SP-035'],
            ['jurusan_id' => '8',  'name' => 'SP-025'],
            ['jurusan_id' => '8',  'name' => 'SP-015'],
            ['jurusan_id' => '8',  'name' => 'SP-005'],

            ['jurusan_id' => '11',  'name' => 'DK-023'],
            ['jurusan_id' => '11',  'name' => 'DK-024'],
            ['jurusan_id' => '11',  'name' => 'DK-025'],

            ['jurusan_id' => '13',  'name' => 'HI-112'],
            ['jurusan_id' => '13',  'name' => 'HI-113'],
            ['jurusan_id' => '13',  'name' => 'HI-114'],
            ['jurusan_id' => '13',  'name' => 'HI-115']
        ];

        foreach ($listRuangan as $ruangan) {
        	Ruangan::create($ruangan);
        }
    }
}
