<?php
   
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Company;
use App\Models\Vacancy;
use App\Models\Jurusan;
use App\Models\Skills;
   
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard');
    } 
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $profile = Profile::count();
        $company = Company::count();
        $vacancy = Vacancy::count();
        $jurusan = Jurusan::count();
        $skills = Skills::count();
        return view('adminHome', compact('profile', 'company', 'vacancy', 'jurusan', 'skills'));
    }
}