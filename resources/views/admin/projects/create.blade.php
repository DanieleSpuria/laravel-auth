@extends('layouts.app');

@section('content')
  <div class="container my-5">
    <h2 class="my-4">New project</h2>

    <form action="{{ route('admin.projects.store') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Enter title...">
      </div>

      <div class="mb-3">
        <label for="date" class="form-label">Date</label>
        <input type="date" class="form-control" id="date" name="date">
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" name="description" id="description" cols="30" rows="10" placeholder="Write a description of your project..."></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <script>
    ClassicEditor
      .create( document.querySelector( '#descriprion' ) )
      .catch( error => {
          console.error( error );
      } );
  </script>

@endsection
