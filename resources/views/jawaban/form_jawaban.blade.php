@extends('layouts.master')


@section('content')
	<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Answer</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Answer</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><a href="/pertanyaan" class="btn">Give an Answer</a></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

              <h3>Title : {{ $pertanyaan -> title }}</h3>
              <h3>Question : {{ $pertanyaan -> question }}</h3>
              
              <br>
              <form action='/jawaban/{{$pertanyaan->id}}' method="POST">
              <div class="form-group">
                {{ csrf_field()}}
                <input type="hidden" name="pertanyaan_id" value=""/>
                <label for="inputDescription">Answer here</label>
                <textarea id="isi" name="isi" class="form-control" rows="4"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@endsection