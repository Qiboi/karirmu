<?php

namespace App\Models;

use App\Models\Company;
use App\Models\Jurusan;
use App\Models\Skills;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;

    protected $table = 'lowongan';

    protected $fillable = [
        'id_perusahaan', 
        'posisi', 
        'lokasi', 
        'id_skill',
        'id_jurusan',
        'gaji', 
        'kontak', 
        'kuota', 
        'tutup', 
        'status', 
    ];

    public function company()
    {
        return $this->belongsTo(Company::class, 'id_perusahaan');
    }

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'id_jurusan');
    }

    public function skills()
    {
        return $this->belongsTo(Skills::class, 'id_skill');
    }
}
