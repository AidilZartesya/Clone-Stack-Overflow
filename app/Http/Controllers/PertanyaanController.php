<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
    public function create()
    {
    	return view('pertanyaan.form_pertanyaan');
    }

    public function show()
    {
    	return view('pertanyaan.show_pertanyaan');
    }

    public function store()
    {
        $pertanyaan = new PertanyaanModel();
        
        $pertanyaan->title = request('title');
        $pertanyaan->question = request('question');
        $pertanyaan->user_id = Auth::id();

        $pertanyaan->save();

        return redirect('/');
    }
}
