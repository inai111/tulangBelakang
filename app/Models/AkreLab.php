<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AkreLab extends Model
{
    use HasFactory;

    protected $table = 'akrelab';
    protected $guarded = ['id'];

    public function perusahaan()
    {
    return $this->hasMany(Perusahaan::class);
    }
    public function airlimbah()
    {
    return $this->hasMany(Laboratorium::class);
    }
}
