<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Skills;

class SkillsSeeder extends Seeder
{
    // /**
    //  * Run the database seeds.
    //  */
    // public function run(): void
    // {
        
    // }

    public function run()
    {
        $skills = [
            [
               'skill'=>'Membaca dan memahami gambar teknik',
            ],
            [
               'skill'=>'Pemahaman dasar tentang mesin dan peralatan teknik',
            ],
            [
               'skill'=>'Keterampilan praktis dalam pengelasan, permesinan, atau perakitan',
            ],
            [
               'skill'=>'Pemeliharaan dan perbaikan peralatan teknik',
            ],
            [
               'skill'=>'Python',
            ],
            [
               'skill'=>'Java',
            ],
            [
               'skill'=>'C++',
            ],
            [
               'skill'=>'HTML',
            ],
            [
               'skill'=>'CSS',
            ],
            [
               'skill'=>'Javascript',
            ],
            [
               'skill'=>'PHP',
            ],
            [
               'skill'=>'Administrasi jaringan dan keamanan komputer',
            ],
            [
               'skill'=>'Pemecahan masalah perangkat keras dan perangkat lunak komputer',
            ],
            [
               'skill'=>'Keterampilan administrasi perkantoran',
            ],
            [
               'skill'=>'Keahlian komunikasi dan negosiasi',
            ],
            [
               'skill'=>'Pengelolaan proyek kecil atau tugas bisnis',
            ],
            [
               'skill'=>'Pemahaman dasar tentang manajemen keuangan',
            ],
            [
               'skill'=>'Keterampilan memasak dasar dan teknik kuliner',
            ],
            [
               'skill'=>'Kreativitas dalam penyajian makanan',
            ],
            [
               'skill'=>'Pemahaman tentang kebersihan dan sanitasi makanan',
            ],
            [
               'skill'=>'Pemahaman tentang manajemen dapur dan persediaan',
            ],
            [
               'skill'=>'Pemahaman dasar tentang sistem otomotif dan komponennya',
            ],
            [
               'skill'=>'Keterampilan dalam perawatan dan perbaikan kendaraan',
            ],
            [
               'skill'=>'Pemecahan masalah pada mesin kendaraan',
            ],
            [
               'skill'=>'Penggunaan peralatan dan alat otomotif',
            ],
        ];
    
        foreach ($skills as $key => $skill) {
            Skills::create($skill);
        }
    }
}
