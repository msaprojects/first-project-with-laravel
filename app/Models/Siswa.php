<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    /// requirement for load table siswa
    protected $table='siswa';
    /// requirement for store data to table siswa
    protected $fillable = ['nama', 'nis', 'tanggal_lahir'];
}
