<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bidang extends Model
{
    use HasFactory;

    protected $table = 'table_bidang';
    protected $guarded = ['id'];

    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function perusahaan()
    {
    return $this->hasMany(Perusahaan::class);
    }
}
