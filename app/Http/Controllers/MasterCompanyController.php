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
    
    public function store(Request $data)
    {
        if ($data->file('logo')) {

            $mitra = $data->file('logo');
            $filename ='logo'."-".time().".{$mitra->extension()}";
            $mitra->storeAs('public/image/logo', $filename);
            $imageUrl = '/storage/image/logo/' . $filename;
        }else{
            $imageUrl = null;
        }
        Company::create([
            'name' => $data['name'],
            'alamat' => $data['alamat'],
            'deskripsi' => $data['deskripsi'],
            'kontak' => $data['kontak'],
            'logo' => $imageUrl,
        ]);
        
        return redirect()->route('mastercompany.index');
    }

    public function edit($company)
    {
        $companies = Company::select('*')->where('id', $company)->latest()->get();
        return view('admin.mastercompany.edit', compact('companies'));
    }

    public function update(Request $data, $company)
    {
        Company::select('*')->where('id', $company)->update([
            'name' => $data['name'],
            'alamat' => $data['alamat'],
            'deskripsi' => $data['deskripsi'],
            'kontak' => $data['kontak'],
            'logo' => $data['logo'],
        ]);
        return redirect()->route('mastercompany.index');
    }

    public function show($id){

        $company = Company::find($id);
        $vacancies = Vacancy::where('id_perusahaan', $company->id)->get();

        return view('admin.mastercompany.show', compact('company', 'vacancies'));
    }
}
