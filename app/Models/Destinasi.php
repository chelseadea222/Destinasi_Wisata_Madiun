<?php

namespace App\Models;

// 1. INI HARUS ADA (Mengenalkan asal HasFactory)
use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Database\Eloquent\Model;

class Destinasi extends Model
{
    // 2. Jika nomor 1 tidak ada, baris ini akan berwarna kuning!
    use HasFactory; 

    protected $fillable = [
        'nama_destinasi', 
        'lokasi', 
        'status'
    ];
}