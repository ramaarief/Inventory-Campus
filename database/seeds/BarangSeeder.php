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
        $listBarang = ['Meja', 'Papan_Tulis', 'Spidol', 'Proyektor', 'LCD'];

        foreach ($listBarang as $barang) {
        	Barang::create(['name' => $barang]);
        }
    }
}
