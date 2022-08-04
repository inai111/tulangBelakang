<?php

namespace Database\Seeders;

use App\Models\Kelurahan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class KelurahanSeeder extends Seeder
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
                'kecamatan_id' => 1,
                'nama_kelurahan' => 'Banyuanyar',
            ],
            [
                'kecamatan_id' => 1,
                'nama_kelurahan' => 'Banjarsari',
            ],
            [
                'kecamatan_id' => 1,
                'nama_kelurahan' => 'Gilingan',
            ],
            [
                'kecamatan_id' => 1,
                'nama_kelurahan' => 'Joglo',
            ],
            [
                'kecamatan_id' => 1,
                'nama_kelurahan' => 'Kadipiro',
            ],
            [
                'kecamatan_id' => 1,
                'nama_kelurahan' => 'Keprabon',
            ],
            [
                'kecamatan_id' => 1,
                'nama_kelurahan' => 'Kestalan',
            ],
            [
                'kecamatan_id' => 1,
                'nama_kelurahan' => 'Ketelan',
            ],
            [
                'kecamatan_id' => 1,
                'nama_kelurahan' => 'Manahan',
            ],
            [
                'kecamatan_id' => 1,
                'nama_kelurahan' => 'Mangkubumen',
            ],
            [
                'kecamatan_id' => 1,
                'nama_kelurahan' => 'Nusukan',
            ],
            [
                'kecamatan_id' => 1,
                'nama_kelurahan' => 'Punggawan',
            ],
            [
                'kecamatan_id' => 1,
                'nama_kelurahan' => 'Setabelan',
            ],
            [
                'kecamatan_id' => 1,
                'nama_kelurahan' => 'Sumber',
            ],
            [
                'kecamatan_id' => 1,
                'nama_kelurahan' => 'Timuran',
            ],
            [
                'kecamatan_id' => 2,
                'nama_kelurahan' => 'Gandekan',
            ],
            [
                'kecamatan_id' => 2,
                'nama_kelurahan' => 'Jagalan',
            ],
            [
                'kecamatan_id' => 2,
                'nama_kelurahan' => 'Jebres',
            ],
            [
                'kecamatan_id' => 2,
                'nama_kelurahan' => 'Kepatihan Kulon',
            ],
            [
                'kecamatan_id' => 2,
                'nama_kelurahan' => 'Kepatihan Wetan',
            ],
            [
                'kecamatan_id' => 2,
                'nama_kelurahan' => 'Mojosongo',
            ],
            [
                'kecamatan_id' => 2,
                'nama_kelurahan' => 'Pucang Sawit',
            ],
            [
                'kecamatan_id' => 2,
                'nama_kelurahan' => 'Purwodiningratan',
            ],
            [
                'kecamatan_id' => 2,
                'nama_kelurahan' => 'Sewu',
            ],
            [
                'kecamatan_id' => 2,
                'nama_kelurahan' => 'Sudiroprajan',
            ],
            [
                'kecamatan_id' => 2,
                'nama_kelurahan' => 'Tegalharjo',
            ],
            [
                'kecamatan_id' => 3,
                'nama_kelurahan' => 'Bumi',
            ],
            [
                'kecamatan_id' => 3,
                'nama_kelurahan' => 'Jajar',
            ],
            [
                'kecamatan_id' => 3,
                'nama_kelurahan' => 'Karangasem',
            ],
            [
                'kecamatan_id' => 3,
                'nama_kelurahan' => 'Kerten',
            ],
            [
                'kecamatan_id' => 3,
                'nama_kelurahan' => 'Laweyan',
            ],
            [
                'kecamatan_id' => 3,
                'nama_kelurahan' => 'Pajang',
            ],
            [
                'kecamatan_id' => 3,
                'nama_kelurahan' => 'Panularan',
            ],
            [
                'kecamatan_id' => 3,
                'nama_kelurahan' => 'Penumping',
            ],
            [
                'kecamatan_id' => 3,
                'nama_kelurahan' => 'Purwosari',
            ],
            [
                'kecamatan_id' => 3,
                'nama_kelurahan' => 'Sondakan',
            ],
            [
                'kecamatan_id' => 3,
                'nama_kelurahan' => 'Sriwedari',
            ],
            [
                'kecamatan_id' => 4,
                'nama_kelurahan' => 'Baluwarti',
            ],
            [
                'kecamatan_id' => 4,
                'nama_kelurahan' => 'Gajahan',
            ],
            [
                'kecamatan_id' => 4,
                'nama_kelurahan' => 'Joyosuran',
            ],
            [
                'kecamatan_id' => 4,
                'nama_kelurahan' => 'Kampung Baru',
            ],
            [
                'kecamatan_id' => 4,
                'nama_kelurahan' => 'Kauman',
            ],
            [
                'kecamatan_id' => 4,
                'nama_kelurahan' => 'Kedung',
            ],
            [
                'kecamatan_id' => 4,
                'nama_kelurahan' => 'Lumbu',
            ],
            [
                'kecamatan_id' => 4,
                'nama_kelurahan' => 'Mojo',
            ],
            [
                'kecamatan_id' => 4,
                'nama_kelurahan' => 'Pasar Kliwon',
            ],
            [
                'kecamatan_id' => 4,
                'nama_kelurahan' => 'Sangkrah',
            ],
            [
                'kecamatan_id' => 4,
                'nama_kelurahan' => 'Semanggi',
            ],
            [
                'kecamatan_id' => 5,
                'nama_kelurahan' => 'Danukusuman',
            ],
            [
                'kecamatan_id' => 5,
                'nama_kelurahan' => 'Jayengan',
            ],
            [
                'kecamatan_id' => 5,
                'nama_kelurahan' => 'Joyotakan',
            ],
            [
                'kecamatan_id' => 5,
                'nama_kelurahan' => 'Kemlayan',
            ],
            [
                'kecamatan_id' => 5,
                'nama_kelurahan' => 'Kratonan',
            ],
            [
                'kecamatan_id' => 5,
                'nama_kelurahan' => 'Serengan',
            ],
            [
                'kecamatan_id' => 5,
                'nama_kelurahan' => 'Tipes',
            ],
        ])->each(function($kelurahan){
            Kelurahan::create($kelurahan);
        });
    }
}
