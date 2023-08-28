<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurusan;

class JurusanController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $jurusans = Jurusan::all();
        return view('admin.jurusan.index', compact('jurusans'));
    }

    public function create()
    {
        return  view('admin.jurusan.create');
    }

    public function store(Request $request)
    {
        $jurusan = new Jurusan([
            'nama_jurusan' => $request->nama_jurusan,
        ]);

        $jurusan->save();

        return redirect()->route('jurusan.index');
    }
}
