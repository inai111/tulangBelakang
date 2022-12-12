<?php

namespace Database\Seeders;

use App\Models\AkreLab;
use Illuminate\Database\Seeder;

class AkreLabSeeder extends Seeder
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
                'akre_lab' => 'Akreditasi KAN',
            ],
            [
                'akre_lab' => 'Akreditasi KLHK',
            ],
            [
                'akre_lab' => 'Non (Tidak Keduanya)',
            ],
        ])->each(function($akrelab){
            AkreLab::create($akrelab);
        });
    }
}
