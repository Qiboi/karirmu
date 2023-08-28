<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MasterUserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $datauser=User::all();
        return view('admin.masteruser.index', compact('datauser'));
    }

}
