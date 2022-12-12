<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pertek extends Model
{
    use HasFactory;
     protected $table ='pertek';
     protected $guarded = ['id'];
     public $incrementing = false;
    //  protected $fillable = [
    //     //  'id', 'id_perusahaan', 'surat_permohonan', 'surat_persetujuan_pembuangan_air', 'surat_persetujuan_pembuangan_formasi', 'surat_persetujuan_pemanfaatan_formasi','nama_pertek', 'no_rekomendasi', 'lokasi','upload_dokumen',
    //     'id','nama_pertek', 'no_rekomendasi', 'lokasi','upload_dokumen',
    //  ];
    public function perusahaan()
    {
    return $this->hasMany(Perusahaan::class);
    }
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }
}