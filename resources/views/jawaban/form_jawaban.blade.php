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
              <table class="table table-bordered">
                <thead>                  
                  <tr>
                    <th style="width: 10px">ID</th>
                    <!-- <th style="width: 10px">ID_P</th> -->
                    <th>Question</th>

                    <th style="width: 18%;">Action</th>
                    <!-- <th style="width: 40px">Aksi</th> -->
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                  </tr>
                
                </tbody>
              </table>
              <br>
              <form action="" method="POST">
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