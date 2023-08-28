<?php

namespace App\Models;

use App\Models\Vacancy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    protected $table = 'jurusan';

    protected $fillable = [
        'nama_jurusan'
    ];

    public function vacancies()
    {
        return $this->hasMany(Vacancy::class, 'id_jurusan');
    }

    public function profiles()
    {
        return $this->hasMany(Vacancy::class, 'skill_siswa');
    }
}
