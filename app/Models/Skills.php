<?php

namespace App\Models;

use App\Models\Vacancy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
    use HasFactory;

    protected $table = 'skills';

    protected $fillable = [
        'skill'
    ];

    public function vacancies()
    {
        return $this->hasMany(Vacancy::class, 'id_skill');
    }

    public function profiles()
    {
        return $this->hasMany(Vacancy::class, 'skill_siswa');
    }

    
}
