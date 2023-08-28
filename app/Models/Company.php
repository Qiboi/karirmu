<?php

namespace App\Models;

use App\Models\Vacancy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $table = 'perusahaan';

    protected $fillable = [
        'name', 
        'deskripsi', 
        'alamat', 
        'kontak', 
        'logo'
    ];

    public function vacancies()
    {
        return $this->hasMany(Vacancy::class, 'id_perusahaan');
    }
    
}
