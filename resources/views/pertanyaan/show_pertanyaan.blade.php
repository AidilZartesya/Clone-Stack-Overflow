@extends('layouts.master')

@section('content')
  <h2 class="ml-3">Question</h2>
  <div class="container-fluid">

    <!-- Card Pertanyaan -->
    <div class="card">
      <div class="card-header card-header-primary">
        <h2 class="card-title">{{$data_question->title}}</h2>
        <p class="card-category">Asked {{$data_question->created_at}}</p>
      </div>
      <div class="card-body">
        <div id="typography" class="ml-3">
          <h3>{{$data_question->question}}</h3>
        </div>
      </div>

      <!-- Tombol Vote Pertanyaan-->
      <table class ="table table-borderless ml-3">
        <thead>
          <tr>
            <th scope="col" style="width: 5%"></th>
            <th scope="col" style="width: 5%"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td >
              <a href="/pertanyaan/{{$data_question->id}}/voteup" class="btn btn-danger btn-sm" role="button">nah</a>
            </td>
            <td class="text-lg-center">12</td>
            <td>
              <a href="/pertanyaan/{{$data_question->id}}/voteup" class="btn btn-success btn-sm" role="button">yah</a>
            </td>
          </tr>
        </tbody>
      </table>
      
      
      <!-- List Komentar Pertanyaan -->
      <h5 class="text-light ml-3"><strong>Comment</strong></h5>
      <ul class="list-group list-group-flush">
        @foreach($comment_question as $comment)
          <li class="list-group-item">{{$comment->comment}}</li>
        @endforeach
      </ul>

      <!-- Form Komentar Pertanyaan -->
      <form class="form-inline ml-3" action="/pertanyaan/komentar/{{$data_question->id}}" method="POST">
        <div class="form-group mb-2">
          {{ csrf_field()}}
          <input type="text" class="form-control" id="comment_question" name="comment_question"><br>
        </div>
        <button type="submit" class="btn btn-secondary ">Submit</button>
      </form>

    </div>

    <!-- Card Jawaban -->
    <h2 class="ml-3">Answer</h2>
    @foreach($data_answer as $data)
      <div class="container-fluid">
        <div class="card">
          <div class="card-body">
            <p>Answer {{$loop->iteration}}</p>
            <h3>{{$data->answer}}</h3>
            <p>{{$data->created_at}}</p>
          </div>

          <!-- Tombol Vote Pertanyaan-->
          <table class ="table table-borderless ml-3">
            <thead>
              <tr>
                <th scope="col" style="width: 5%"></th>
                <th scope="col" style="width: 5%"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td >
                  <a href="/pertanyaan/{{$data_question->id}}/voteup" class="btn btn-danger btn-sm" role="button">nah</a>
                </td>
                <td class="text-lg-center">12</td>
                <td>
                  <a href="/pertanyaan/{{$data_question->id}}/voteup" class="btn btn-success btn-sm" role="button">yah</a>
                </td>
              </tr>
            </tbody>
          </table>

          <!-- List Komentar Pertanyaan -->
          <h5 class="text-light ml-3"><strong>Comment</strong></h5>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Cras justo odio</li>
          </ul>

          <!-- Form Komentar Jawaban -->
          <form class="form-inline ml-3" action="/jawaban/komentar/{{$data->id}}" method="POST">
            <div class="form-group mb-2">
              {{ csrf_field()}}
              <input type="text" class="form-control" id="comment_question" name="comment_question"><br>
            </div>
            <button type="submit" class="btn btn-secondary ">Submit</button>
          </form>

        </div>
      </div>
    @endforeach
  </div>

@endsection