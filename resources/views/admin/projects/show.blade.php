@extends('layouts.app')

@section('content')
  <div class="container my-5">
    <h2>{{ $project->title }}</h2>
    <span>{{ $project->date }}</span>
    <p>{{ $project->description }}</p>
  </div>
@endsection
