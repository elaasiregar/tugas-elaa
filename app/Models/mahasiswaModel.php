<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswaModel extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';
    protected $fillable = ['no', 'nim', 'nama_mahasiswa', 'alamat', 'tgl_lahir', 'jk'];
}
