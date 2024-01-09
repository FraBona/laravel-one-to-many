@extends('layouts.app');

@section('content')
  <section class="container">
    <h1>{{$project->title}}</h1>
    <h3>{{$project->content}}</h3>
    @if ($project->type)
      <h5>{{$project->type->name}}</h5>
    @endif
  </section>

@endsection