<?php

namespace App\Models;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Arsip extends Model
{
    use HasFactory;

    protected $table = 'arsips';

    protected $fillable = ['nomor_surat', 'kategori_id', 'judul', 'nomor_sop', 'tanggal_pembuatan', 'tanggal_revisi', 'file_surat'];

    // Relasi dengan Kategori
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
}
