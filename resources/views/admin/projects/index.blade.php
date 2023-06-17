@extends('layouts.app')

@section('content')
  <div class="container m-3">
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Title</th>
          <th scope="col">Date</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($projects as $project)
          <tr>
            <td>{{ $project->id }}</td>
            <td>{{ $project->title }}</td>
            <td>{{ $project->date }}</td>
            <td>
              <a class="btn btn-primary" href="{{ route('admin.projects.show', $project) }}">View</a>
              <a class="btn btn-warning" href="{{ route('admin.projects.edit', $project) }}">Edit</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    <div class="ds-link">
      {{ $projects->links() }}
    </div>
  </div>
@endsection
