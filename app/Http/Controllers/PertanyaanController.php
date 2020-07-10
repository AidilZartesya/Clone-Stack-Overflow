<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;
use App\Models\JawabanModel;
use App\Models\UserModel;

class PertanyaanController extends Controller
{
    public function index(Request $req)
    {
    	// dd($req->all());
    	$pertanyaan = PertanyaanModel::all();
    	return view('pertanyaan.pertanyaan_index', ['pertanyaan' => $pertanyaan]);
    }
    
    public function create()
    {
        return view('pertanyaan.form_pertanyaan');
    }

    public function show($id)
    {

        $data_question = PertanyaanModel::find($id);
        $data_answer = JawabanModel::where('question_id', $id)->get();
        
    	return view('pertanyaan.show_pertanyaan', compact('data_question', 'data_answer'));
    }


    public function store()
    {
        $pertanyaan = new PertanyaanModel();

        $pertanyaan->title = request('title');
        $pertanyaan->question = request('question');
        $pertanyaan->user_id = Auth::id();

        $pertanyaan->save();

        return redirect('/pertanyaan');
    }

    public function delete($id)
    {
        $pertanyaan = \App\Models\PertanyaanModel::find($id);
        $pertanyaan->delete($pertanyaan);
        return redirect('/pertanyaan');
    }
}
