<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacancy;
use App\Models\Company;
use App\Models\Profile;
use App\Models\User;

class LowonganController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){

        $vacancies = Vacancy::all();
        $count = Vacancy::count();
        $companies = Company::all();
        
        // inisialisasi skill dan jurusan pada siswa
        $profile = Profile::where('user_id', auth()->user()->id)->first();
        $s = json_decode($profile->skill_siswa);
        $j = $profile->jurusan_siswa;
        
        // inisialisasi skill lowongan
        $decodedSkills = [];
        foreach ($vacancies as $vacancy) {
            $v = json_decode($vacancy->id_skill);
            $decodedSkills[$vacancy->id] = $v; // Menggunakan ID Vacancy sebagai kunci
        }

        //inisialisasi jurusan lowongan
        $jurusans = [];
        foreach ($vacancies as $vacancy) {
            $j_lowongan = $vacancy->id_jurusan;
            $jurusans[$vacancy->id] = $j_lowongan;
        }
        
        // Array untuk menyimpan hasil match setiap Vacancy
        $matchResults = [];

        // Loop untuk melihat hasil matching dengan masing-masing decodedSkills
        foreach ($decodedSkills as $vacancyId => $skills) {
            $matchingSkills = array_intersect($skills, $s);
            $matchCount = count($matchingSkills);
            $matchResults[$vacancyId] = $matchCount; // Simpan hasil kecocokan ke array $matchResults
        }

        //matching jurusan
        $matchJurusan = [];
        foreach ($jurusans as $vacancyId => $jurusan) {
            if ($j === $jurusan){
                $matchJurusan[$vacancyId] = 1;
            } else{
                $matchJurusan[$vacancyId] = 0;
            }
        }

        // Menampilkan hasil match untuk setiap Vacancy
        $hasil = [];
        foreach ($matchResults as $vacancyId => $matchCount) {
            // echo "Vacancy dengan ID $vacancyId memiliki $matchCount skill match." . PHP_EOL;
            $hasil[$vacancyId] = $matchCount - 5;
        }

        $hasilJurusan = [];
        foreach ($matchJurusan as $vacancyId => $matchJurusanCount) {
            $hasilJurusan[$vacancyId] = $matchJurusanCount - 1;
        }

        foreach ($hasil as $vacancyId => $hasilCount) {        
            if ($hasilCount === 0){
                $bobot_skill[$vacancyId] = 5;
            }else if($hasilCount === 1){
                $bobot_skill[$vacancyId] = 4.5;
            }else if($hasilCount === -1){
                $bobot_skill[$vacancyId] = 4;
            }else if($hasilCount === 2){
                $bobot_skill[$vacancyId] = 3.5;
            }else if($hasilCount === -2){
                $bobot_skill[$vacancyId] = 3;
            }else if($hasilCount === 3){
                $bobot_skill[$vacancyId] = 2.5;
            }else if($hasilCount === -3){
                $bobot_skill[$vacancyId] = 2;
            }else if($hasilCount === 4){
                $bobot_skill[$vacancyId] = 1.5;
            }else if($hasilCount === -4) {
                $bobot_skill[$vacancyId] = 1;
            }
        }

        foreach ($hasilJurusan as $vacancyId => $hasilJurusanCount) {
            if ($hasilJurusanCount === 0){
                $bobot_jurusan[$vacancyId] = 5;
            }else if($hasilJurusanCount === 1){
                $bobot_jurusan[$vacancyId] = 4.5;
            }else if($hasilJurusanCount === -1){
                $bobot_jurusan[$vacancyId] = 4;
            }else if($hasilJurusanCount === 2){
                $bobot_jurusan[$vacancyId] = 3.5;
            }else if($hasilJurusanCount === -2){
                $bobot_jurusan[$vacancyId] = 3;
            }else if($hasilJurusanCount === 3){
                $bobot_jurusan[$vacancyId] = 2.5;
            }else if($hasilJurusanCount === -3){
                $bobot_jurusan[$vacancyId] = 2;
            }else if($hasilJurusanCount === 4){
                $bobot_jurusan[$vacancyId] = 1.5;
            }else if($hasilJurusanCount === -4) {
                $bobot_jurusan[$vacancyId] = 1;
            }
        }

        $total = [];
        foreach ($bobot_skill as $vacancyId => $bobot_s){
            if (isset($bobot_jurusan[$vacancyId])) {
                $total[$vacancyId] = $bobot_s * (65 / 100) + $bobot_jurusan[$vacancyId] * (35 / 100);
            }
        }

        arsort($total);        
        $idV = array_keys($total);
        
        $sortId = Vacancy::whereIn('id', $idV)->orderByRaw("FIELD(id, " . implode(',', $idV) . ")")->get();
        
        return view('lowongan/index', compact('vacancies', 'companies', 'sortId'));
        
    }

    public function show(){

        return view('lowongan/show');
    }
}
