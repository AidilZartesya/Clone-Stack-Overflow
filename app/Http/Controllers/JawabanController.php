<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;
use App\Models\JawabanModel;
use App\Models\UserModel;

class JawabanController extends Controller
{
    public function index($id)
    {	
        $pertanyaan = PertanyaanModel::find($id);
        $jawaban = JawabanModel::all();
    	return view('jawaban.form_jawaban', compact('pertanyaan, jawaban'));
    }
}
