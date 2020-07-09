<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
