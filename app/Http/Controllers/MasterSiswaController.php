<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\User;

class MasterSiswaController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $students = Profile::all();

        return view('admin.mastersiswa.index', compact('students'));
    }

    public function create(){
        return view('admin.mastersiswa.create');
    }

    public function store(Request $request){

        if ($request->file('foto')) {

            $mitra = $request->file('foto');
            $filename ='foto'."-".time().".{$mitra->extension()}";
            $mitra->storeAs('public/image/foto', $filename);
            $imageUrl = '/image/foto/' . $filename;
        }else{
            $imageUrl = null;
        }

        $date = date('Y-m-d', strtotime($request->tutup));

        return view('admin.mastersiswa.index');
    }
}
