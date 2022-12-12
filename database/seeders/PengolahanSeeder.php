<?php

namespace Database\Seeders;

use App\Models\Pengolahan;
use Illuminate\Database\Seeder;

class PengolahanSeeder extends Seeder
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
                'jenis_pengolahan' => 'Bak Pengumpul',
            ],
            [
                'jenis_pengolahan' => 'Koagulasi',
            ],
            [
                'jenis_pengolahan' => 'Bak Anaerob',
            ],
            [
                'jenis_pengolahan' => 'Bak Aerob',
            ],
            [
                'jenis_pengolahan' => 'Filtrasi',
            ],
            [
                'jenis_pengolahan' => 'Sedimentasi',
            ],
            [
                'jenis_pengolahan' => 'Withline',
            ],
            [
                'jenis_pengolahan' => 'Lainnya',
            ],
        ])->each(function($pengolahan){
            Pengolahan::create($pengolahan);
        });
    }
}
