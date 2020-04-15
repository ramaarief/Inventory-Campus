<?php

use Illuminate\Database\Seeder;
use App\Jurusan;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listJurusan = [
            ['nama_jurusan' => 'Teknik Informatika',            'fakultas_id' => '1'],
            ['nama_jurusan' => 'Sistem Informasi',              'fakultas_id' => '1'],
            ['nama_jurusan' => 'Teknologi Informasi',           'fakultas_id' => '1'],

            ['nama_jurusan' => 'Ilmu Hukum',                    'fakultas_id' => '3'],

            ['nama_jurusan' => 'Ilmu Administrasi Publik',      'fakultas_id' => '4'],
            ['nama_jurusan' => 'Ilmu Administrasi Bisnis',      'fakultas_id' => '4'],

            ['nama_jurusan' => 'Agroekoteknologi',              'fakultas_id' => '5'],

            ['nama_jurusan' => 'Teknik Sipil',                  'fakultas_id' => '7'],
            ['nama_jurusan' => 'Teknik Industri',               'fakultas_id' => '7'],
            ['nama_jurusan' => 'Teknik Kimia',                  'fakultas_id' => '7'],

            ['nama_jurusan' => 'Pendidikan Dokter',             'fakultas_id' => '8'],
            ['nama_jurusan' => 'Farmasi',                       'fakultas_id' => '8'],
    
            ['nama_jurusan' => 'Hubungan Internasional',        'fakultas_id' => '12'],
            ['nama_jurusan' => 'Ilmu Komunikasi',               'fakultas_id' => '12'],

            ['nama_jurusan' => 'Pendidikan Bahasa Inggris',     'fakultas_id' => '13']
        ];

        foreach ($listJurusan as $jurusan) {
        	Jurusan::create($jurusan);
        }
    }
}
