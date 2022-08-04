<?php

namespace Database\Seeders;

use App\Models\Kecamatan;
use Illuminate\Database\Seeder;

class KecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([
            [
                'nama_kecamatan' => 'Banjarsari',
            ],
            [
                'nama_kecamatan' => 'Jebres',
            ],
            [
                'nama_kecamatan' => 'Laweyan',
            ],
            [
                'nama_kecamatan' => 'Pasar Kliwon',
            ],
            [
                'nama_kecamatan' => 'Serengan',
            ],
        ])->each(function($kecamatan){
            Kecamatan::create($kecamatan);
        });
    }
}
