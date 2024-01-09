@extends('layouts.app');

@section('content')
  <section class="container">
    <h1>{{$project->title}}</h1>
    <h3>{{$project->content}}</h3>
  </section>

@endsection