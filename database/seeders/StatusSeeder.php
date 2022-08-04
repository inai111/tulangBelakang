<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
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
                'status' => 'Pengajuan',
            ],
            [
                'status' => 'Disetujui',
            ],
            [
                'status' => 'Ditolak',
            ],
        ])->each(function ($status) {
            Status::create($status);
        });
    }
}
