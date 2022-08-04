<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laboratorium extends Model
{
    use HasFactory;

    protected $table = 'table_laboratorium';
    protected $guarded = ['id'];

    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function laporan()
    {
    return $this->hasMany(Laporan::class);
    }
}
