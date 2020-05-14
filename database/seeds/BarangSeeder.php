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
            ['ruangan_id' => '1',  'name' => 'Meja',         'total' => '25', 'broken' => '3', 'photo' => 'meja.png',  'created_by' => '1', 'updated_by' => '1'],
            ['ruangan_id' => '1',  'name' => 'Papan_Tulis',  'total' => '2',  'broken' => '0', 'photo' => 'papan_tulis.png',  'created_by' => '1', 'updated_by' => '2'],
            ['ruangan_id' => '1',  'name' => 'Spidol',       'total' => '5',  'broken' => '1', 'photo' => 'spidol.png',  'created_by' => '1', 'updated_by' => '1'],
            ['ruangan_id' => '1',  'name' => 'Proyektor',    'total' => '1',  'broken' => '0', 'photo' => 'proyektor.png',  'created_by' => '1', 'updated_by' => '1'],
            ['ruangan_id' => '1',  'name' => 'LCD',          'total' => '1',  'broken' => '1', 'photo' => 'lcd.png',  'created_by' => '1', 'updated_by' => '2'],

            ['ruangan_id' => '5',  'name' => 'Meja',         'total' => '20', 'broken' => '2', 'photo' => 'meja.png',  'created_by' => '1', 'updated_by' => '1'],
            ['ruangan_id' => '5',  'name' => 'Papan_Tulis',  'total' => '1',  'broken' => '0', 'photo' => 'papan_tulis.png',  'created_by' => '1', 'updated_by' => '2'],
            ['ruangan_id' => '5',  'name' => 'Spidol',       'total' => '3',  'broken' => '2', 'photo' => 'spidol.png',  'created_by' => '1', 'updated_by' => '1'],
            ['ruangan_id' => '5',  'name' => 'Proyektor',    'total' => '1',  'broken' => '1', 'photo' => 'proyektor.png',  'created_by' => '1', 'updated_by' => '1'],
            ['ruangan_id' => '5',  'name' => 'LCD',          'total' => '1',  'broken' => '0', 'photo' => 'lcd.png',  'created_by' => '1', 'updated_by' => '2'],

            ['ruangan_id' => '7',  'name' => 'Meja',         'total' => '30', 'broken' => '5', 'photo' => 'meja.png',  'created_by' => '1', 'updated_by' => '1'],
            ['ruangan_id' => '7',  'name' => 'Papan_Tulis',  'total' => '2',  'broken' => '1', 'photo' => 'papan_tulis.png',  'created_by' => '1', 'updated_by' => '2'],
            ['ruangan_id' => '7',  'name' => 'Spidol',       'total' => '4',  'broken' => '0', 'photo' => 'spidol.png',  'created_by' => '1', 'updated_by' => '1'],
            ['ruangan_id' => '7',  'name' => 'Proyektor',    'total' => '2',  'broken' => '0', 'photo' => 'proyektor.png',  'created_by' => '1', 'updated_by' => '1'],
            ['ruangan_id' => '7',  'name' => 'LCD',          'total' => '2',  'broken' => '0', 'photo' => 'lcd.png',  'created_by' => '1', 'updated_by' => '2'],

            ['ruangan_id' => '10',  'name' => 'Meja',         'total' => '15', 'broken' => '1', 'photo' => 'meja.png',  'created_by' => '1', 'updated_by' => '1'],
            ['ruangan_id' => '10',  'name' => 'Papan_Tulis',  'total' => '2',  'broken' => '1', 'photo' => 'papan_tulis.png',  'created_by' => '1', 'updated_by' => '2'],
            ['ruangan_id' => '10',  'name' => 'Spidol',       'total' => '1',  'broken' => '0', 'photo' => 'spidol.png',  'created_by' => '1', 'updated_by' => '1'],
            ['ruangan_id' => '10',  'name' => 'Proyektor',    'total' => '1',  'broken' => '0', 'photo' => 'proyektor.png',  'created_by' => '1', 'updated_by' => '1'],
            ['ruangan_id' => '10',  'name' => 'LCD',          'total' => '1',  'broken' => '0', 'photo' => 'lcd.png',  'created_by' => '1', 'updated_by' => '2'],

            ['ruangan_id' => '15',  'name' => 'Meja',         'total' => '10', 'broken' => '0', 'photo' => 'meja.png',  'created_by' => '1', 'updated_by' => '1'],
            ['ruangan_id' => '15',  'name' => 'Papan_Tulis',  'total' => '1',  'broken' => '0', 'photo' => 'papan_tulis.png',  'created_by' => '1', 'updated_by' => '2'],
            ['ruangan_id' => '15',  'name' => 'Spidol',       'total' => '3',  'broken' => '1', 'photo' => 'spidol.png',  'created_by' => '1', 'updated_by' => '1'],
            ['ruangan_id' => '15',  'name' => 'Proyektor',    'total' => '2',  'broken' => '1', 'photo' => 'proyektor.png',  'created_by' => '1', 'updated_by' => '1'],
            ['ruangan_id' => '15',  'name' => 'LCD',          'total' => '2',  'broken' => '0', 'photo' => 'lcd.png',  'created_by' => '1', 'updated_by' => '2']
        ];

        foreach ($listBarang as $barang) {
        	Barang::create($barang);
        }
    }
}
