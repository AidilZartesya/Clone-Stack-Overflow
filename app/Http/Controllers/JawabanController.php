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
    	return view('jawaban.form_jawaban', compact('pertanyaan', 'jawaban'));
    }

    public function store($question_id)
    {
        $jawaban = new JawabanModel();

        $jawaban->question_id = $question_id;
        $jawaban->answer = request('isi');
        $jawaban->user_id = Auth::id();
        $jawaban->accepted = 0;

        $jawaban->save();

        return redirect('/pertanyaan');
    }
}
