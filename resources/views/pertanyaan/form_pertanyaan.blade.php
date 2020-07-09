@extends('layouts.master')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Question</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/index">Home</a></li>
              <li class="breadcrumb-item active">Add Question</li>
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
              <h3 class="card-title"><a href="/pertanyaan" class="btn">Back</a></h3>
            </div>
            <div class="card-body">
              <form action="/pertanyaan" method="POST">
              <div class="form-group">
                <label for="inputTitle">Title</label>
                <input type="text" class="form-control" id="title" name="title"><br>
              </div>
              <div class="form-group">
                {{ csrf_field()}}
                <label for="inputDescription">Question</label>
                <textarea id="question" name="question" class="form-control" rows="4"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
            <!-- /.card-body -->
        
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