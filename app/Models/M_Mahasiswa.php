<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes; //pake softdelete biar data ngga lgsung ilang tapi tidak ditampilkan

class M_Mahasiswa extends Model
{
    use softDeletes;

    protected $table = 'mahasiswa'; //untuk memilih table mahasiswanya
    protected $fillable = [         //yg mau diambil
        'nama',
        'nim',
        'alamat'
    ];

    protected $hidden; //gk diisi krna g ada yg disembunyikan
}
