<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AirLimbah extends Model
{
    use HasFactory;
    protected $table = 'airlimbah';
    protected $guarded = ['id'];
    public $incrementing = false;

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function pengolahan()
    {
        return $this->belongsTo(Pengolahan::class);
    }
    public function perusahaan()
    {
    return $this->hasMany(Perusahaan::class);
    }
}
