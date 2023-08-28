<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacancy;
use App\Models\Company;
use App\Models\Jurusan;
use App\Models\Skills;

class MasterVacancyController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $vacancies = Vacancy::with('company')->get();
        return view('admin.masterlowongan.index', compact('vacancies'));
    }

    public function create(){
        $companies = Company::query()->get();
        $jurusans = Jurusan::query()->get();
        $skills = Skills::query()->get();
        return view('admin.masterlowongan.create', compact('companies', 'jurusans', 'skills'));
    }

    public function store(Request $request)
    {
        // Validasi input form
        // $request->validate([
        //     'id_perusahaan' => 'required',
        //     'posisi' => 'required',
        //     // tambahkan validasi untuk kolom lainnya
        // ]);
        $c = $request->id_skill;
        $date = date('Y-m-d', strtotime($request->tutup));

        // Cari perusahaan berdasarkan ID
        $company = Company::findOrFail($request->id_perusahaan);
        $jurusan = Jurusan::findOrFail($request->id_jurusan);
        $skills = Skills::findOrFail($request->id_skill);
        
        // Simpan data lowongan dengan relasi ke perusahaan
        $vacancy = new Vacancy([
            'id_perusahaan' => $request->id_perusahaan,
            'posisi' => $request->posisi,
            'id_jurusan' => $request->id_jurusan,
            'id_skill' => json_encode($request->id_skill),
            'lokasi' => $request->lokasi,
            'gaji' => $request->gaji,
            'kontak' => $request->kontak,
            'kuota' => $request->kuota,
            'tutup' => $date,
            'status' => $request->status == 'on' ? 1 : 0,
        ]);

        $vacancy->save();

        return redirect()->route('mastervacancy.index');
    }

    public function edit($id, Request $request)
    {
        $vacancy = Vacancy::findOrFail($id);
        $companies = Company::all();
        return view('admin.masterlowongan.edit', compact('vacancy', 'companies'));

    }

    public function show($id)
    {
        $vacancy = Vacancy::findOrFail($id);
        // dd($vacancy);
        $companies = Company::where('id', $vacancy->id_perusahaan)->get();
        // $skills = Skills::query()->get();
        $id_skills = json_decode($vacancy->id_skill);
        $skillIds = array_map('intval', $id_skills);
        $skills = Skills::whereIn('id', $skillIds)->get();
        // dd($skills);
        return view('admin.masterlowongan.show', compact('vacancy', 'companies', 'skills'));
    }


}
