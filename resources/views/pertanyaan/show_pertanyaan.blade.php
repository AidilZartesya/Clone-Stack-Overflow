@extends('layouts.master')

@section('content')
<<<<<<< HEAD
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
        <li class="list-group-item">Cras justo odio</li>
      </ul>

      <!-- Form Komentar Pertanyaan -->
      <form class="form-inline ml-3" action="/komentarpertanyaan" method="POST">
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
            <h4>{{$data->answer}}</h4>
=======
    <div class="container-fluid">
          <div class="card">
            <div class="card-header card-header-primary">
              <h2 class="card-title">{{$data->title}}</h2>
              <p class="card-category">Asked {{$data->created_at}}</p>
            </div>
            <div class="card-body">
              <div id="typography">
                <div class="card-title">
                  <h2>Question</h2>
                </div>
                <div class="row">
                  <div class="tim-typo">
                    <p>
                      <span class="tim-note">Description</span>{{$data->question}}</h2>
                  </div>
                  <div class="tim-typo">
                    <h5>
                      <span class="tim-note">Answer</span>The Life of Material Dashboard</h5>
                  </div>
                  <div class="tim-typo">
                    <h5>
                      <span class="tim-note">Created at</span>The Life of Material Dashboard</h5>
                  </div>
                  <div class="tim-typo">
                    <h5>
                      <span class="tim-note">Modified at</span>The Life of Material Dashboard</h5>
                  </div>
                  <div class="tim-typo">
                    <h6>
                      <span class="tim-note">Header 6</span>The Life of Material Dashboard</h6>
                  </div>
                  <div class="tim-typo">
                    <p>
                      <span class="tim-note">Paragraph</span>
                      I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.</p>
                  </div>
                  <div class="tim-typo">
                    <span class="tim-note">Quote</span>
                    <blockquote class="blockquote">
                      <p>
                        I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.
                      </p>
                      <small>
                        Kanye West, Musician
                      </small>
                    </blockquote>
                  </div>
                  <div class="tim-typo">
                    <span class="tim-note">Muted Text</span>
                    <p class="text-muted">
                      I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...
                    </p>
                  </div>
                  <div class="tim-typo">
                    <span class="tim-note">Primary Text</span>
                    <p class="text-primary">
                      I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                  </div>
                  <div class="tim-typo">
                    <span class="tim-note">Info Text</span>
                    <p class="text-info">
                      I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                  </div>
                  <div class="tim-typo">
                    <span class="tim-note">Success Text</span>
                    <p class="text-success">
                      I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                  </div>
                  <div class="tim-typo">
                    <span class="tim-note">Warning Text</span>
                    <p class="text-warning">
                      I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...
                    </p>
                  </div>
                  <div class="tim-typo">
                    <span class="tim-note">Danger Text</span>
                    <p class="text-danger">
                      I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                  </div>
                  <div class="tim-typo">
                    <h2>
                      <span class="tim-note">Small Tag</span>
                      Header with small subtitle
                      <br>
                      <small>Use "small" tag for the headers</small>
                    </h2>
                  </div>
                </div>
              </div>
            </div>
>>>>>>> dc88fcdb689c77462b79f5cc9da5daabac9bc3ea
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
          <form class="form-inline ml-3" action="/komentarjawaban" method="POST">
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