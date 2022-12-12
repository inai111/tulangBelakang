<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengolahan extends Model
{
    use HasFactory;

    protected $table = 'pengolahan';
    protected $guarded = ['id'];

    public function perusahaan()
    {
    return $this->hasMany(Perusahaan::class);
    }
    public function airlimbah()
    {
    return $this->hasMany(AirLimbah::class);
    }
}
