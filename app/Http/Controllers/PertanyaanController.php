<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;
use App\Models\JawabanModel;
use App\Models\UserModel;
use App\Models\KomentarPertanyaanModel;
use App\Models\KomentarJawabanModel;

class PertanyaanController extends Controller
{
    public function index(Request $req)
    {
        // dd($req->all());
        $users = UserModel::all();
    	$pertanyaan = PertanyaanModel::all();
    	return view('pertanyaan.pertanyaan_index', compact('pertanyaan', 'users'));
    }
    
    public function create()
    {
        return view('pertanyaan.form_pertanyaan');
    }

    public function show($id)
    {
        
        $data_question = PertanyaanModel::find($id);
        $data_answer = JawabanModel::where('question_id', $id)->get();
        $comment_question = KomentarPertanyaanModel::where('question_id', $id)->get();
        $users = UserModel::find($data_question->user_id);
        $comment_answer=[];
        foreach($data_answer as $data){
            $temp = KomentarJawabanModel::where('answer_id', $data->id)->get();
            array_push($comment_answer,$temp);   
        }

    	return view('pertanyaan.show_pertanyaan', compact('data_question', 'data_answer', 'comment_question', 'comment_answer', 'users'));
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
        // Delete Komentar Pertanyaan
        $komentar_pertanyaan = KomentarPertanyaanModel::where('question_id', $id)->get();
        foreach($komentar_pertanyaan as $temp){
            $temp->delete($temp);
        }
        
        // Delete Jawaban dan Komentar Jawaban
        $jawaban = JawabanModel::where('question_id', $id)->get();
        foreach($jawaban as $temp){
            $komentar_jawaban = KomentarJawabanModel::where('answer_id', $temp->id)->get();
            // Delete Komentar Jawaban
            foreach($komentar_jawaban as $dump){
                $dump->delete($dump);
            }
            // Delete Jawaban
            $temp->delete($temp);
        }
        
        // Delete Pertanyaan
        $pertanyaan = PertanyaanModel::find($id);
        $pertanyaan->delete($pertanyaan);
        return redirect('/pertanyaan');
    }

    public function kometar_pertanyaan($question_id)
    {
        $kometar = new KomentarPertanyaanModel();

        $kometar->comment = request('comment_question');
        $kometar->question_id = $question_id;
        $kometar->user_id = Auth::id();

        $kometar->save();

        return redirect('/pertanyaan');
    }

    public function kometar_jawaban($answer_id)
    {
        $kometar = new KomentarJawabanModel();

        $kometar->comment = request('comment_answer');
        $kometar->answer_id = $answer_id;
        $kometar->user_id = Auth::id();

        $kometar->save();

        return redirect('/pertanyaan');
    }
}
