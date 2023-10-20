<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Vacancy;
use Illuminate\Support\Facades\Storage;

class MasterCompanyController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $companies=Company::all();
        return view('admin.mastercompany.index', compact('companies'));
    }

    public function create(){
        return view('admin.mastercompany.create');
    }
    
    public function store(Request $request)
    {
        if ($request->file('logo')) {
            $mitra = $request->file('logo');
            $filename ='logo'."-".time().".{$mitra->extension()}";
            $mitra->storeAs('image/logo', $filename, 'public'); // Simpan di dalam direktori publik
            $imageUrl = '/storage/image/logo/' . $filename; // URL yang dapat diakses melalui web
        }else{
            $imageUrl = null;
        }
        Company::create([
            'name' => $request['name'],
            'alamat' => $request['alamat'],
            'deskripsi' => $request['deskripsi'],
            'kontak' => $request['kontak'],
            'logo' => $imageUrl,
        ]);
        
        return redirect()->route('mastercompany.index');
    }

    public function edit($company)
    {
        $companies = Company::select('*')->where('id', $company)->latest()->get();
        return view('admin.mastercompany.edit', compact('companies'));
    }

    public function update(Request $request, $company)
    {
        Company::select('*')->where('id', $company)->update([
            'name' => $request['name'],
            'alamat' => $request['alamat'],
            'deskripsi' => $request['deskripsi'],
            'kontak' => $request['kontak'],
            'logo' => $request['logo'],
        ]);
        return redirect()->route('mastercompany.index');
    }

    public function show($id){

        $company = Company::find($id);
        $vacancies = Vacancy::where('id_perusahaan', $company->id)->get();

        return view('admin.mastercompany.show', compact('company', 'vacancies'));
    }
}
