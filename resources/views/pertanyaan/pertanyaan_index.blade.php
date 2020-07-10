@extends('layouts.master')

@section('content')
<div class="ml-3 mt-3">
    <h1>Question List</h1>
    <a href="/pertanyaan/create" class="btn btn-primary mb-2">
      Create New Item
    </a>
    <table class="table table-bordered">
      <thead>                  
        <tr>
          <th style="width: 10px">#</th>
          <th>Title</th>
          <th style="width: 20%;">User name</th>
          <th style="width: 120px">Create At</th>
          <th style="width: 120px">Update At</th>
          <th>Votes</th>
          <th style="width: 27%;">Actions</th>
        </tr>
      </thead>
      <tbody>
      @foreach($pertanyaan as $p)
            <tr>
              <td>{{ $loop -> iteration }}</td>
              <td> {{ $p -> title }} </td>
              <td> </td>
              <td> {{ $p -> created_at }} </td>
              <td> {{ $p -> updated_at }} </td>
              <td> </td>
              <td>
                <a href="/pertanyaan/{{$p -> id}}/delete" class="btn btn-danger btn-sm">Delete</a>
                <a href="/jawaban/{{$p -> id}}" class="btn btn-primary btn-sm">View</a>

              </td>
            </tr>
            @endforeach
      
      
      
      </tbody>
    </table>
  </div>
@endsection