<?php

use Illuminate\Database\Seeder;
use App\Barang;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listBarang = [
            ['ruangan_id' => '1',  'name' => 'Meja',         'total' => '25', 'broken' => '3', 'photo' => 'foto1.jpg',  'created_by' => '1', 'updated_by' => '1'],
            ['ruangan_id' => '3',  'name' => 'Papan_Tulis',  'total' => '2',  'broken' => '0', 'photo' => 'foto2.jpg',  'created_by' => '1', 'updated_by' => '2'],
            ['ruangan_id' => '5',  'name' => 'Spidol',       'total' => '3',  'broken' => '1', 'photo' => 'foto3.jpg',  'created_by' => '1', 'updated_by' => '1'],
            ['ruangan_id' => '2',  'name' => 'Proyektor',    'total' => '1',  'broken' => '0', 'photo' => 'foto4.jpg',  'created_by' => '1', 'updated_by' => '1'],
            ['ruangan_id' => '4',  'name' => 'LCD',          'total' => '2',  'broken' => '0', 'photo' => 'foto5.jpg',  'created_by' => '1', 'updated_by' => '2']
        ];

        foreach ($listBarang as $barang) {
        	Barang::create($barang);
        }
    }
}
