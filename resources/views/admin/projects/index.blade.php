@extends('layouts.app')

@section('content')
  <div class="container m-3">
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Title</th>
          <th scope="col">Date</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($projects as $project)
          <tr>
            <td>{{ $project->id }}</td>
            <td>{{ $project->title }}</td>
            <td>{{ $project->date }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
