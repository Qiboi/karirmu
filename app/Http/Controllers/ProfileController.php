<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\User;
use App\Models\Jurusan;
use App\Models\Skills;

class ProfileController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        return view('profile.index', compact('profiles'));
    }

    public function create(){
        $jurusans = Jurusan::query()->get();
        $skills = Skills::query()->get();        
        return view('profile.create', compact('jurusans', 'skills'));
    }

    public function store(Request $request){
        
        

        $date = date('Y-m-d', strtotime($request->tanggal_lahir));

        if ($request->file('foto')) {

            $mitra = $request->file('foto');
            $filename ='foto'."-".time().".{$mitra->extension()}";
            $mitra->storeAs('public/image/foto', $filename);
            $imageUrl = '/storage/image/foto/' . $filename;
        }else{
            $imageUrl = null;
        }

        // Membuat instansiasi objek profil dengan data yang dikirim dari form
        $profile = new Profile([
            'user_id' => auth()->user()->id,
            'nama' => $request->nama,
            'nis' => $request->nis,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $date,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'email' => auth()->user()->email,
            'nomor_telepon' => $request->nomor_telepon,
            'jurusan_siswa' => $request->jurusan_siswa,
            'skill_siswa' => json_encode($request->skill_siswa),
            'foto' => $imageUrl,
        ]);

        // Menyimpan profil ke database
        $profile->save();

        return redirect()->route('dashboard');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        $profile = Profile::where('user_id', $user->id)->first();
        // dd($profile);

        if ($profile === null) {
            return redirect()->route('profile.create');
        }

        $skill_id = json_decode($profile->skill_siswa);
        $skillIds = array_map('intval', $skill_id);
        $skills = Skills::whereIn('id', $skillIds)->get();

        return view('profile.show', compact('profile', 'skills'));
    }

}
