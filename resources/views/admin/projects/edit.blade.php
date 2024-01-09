@extends('layouts.app');

@section('content')
  <section class="container">
    <form action="{{route('admin.projects.update', $project)}}" method="POST">
      @csrf
      @method('PUT')
      <label for="title">Title</label>
      <input type="text" name="title" id="title" value="{{$project->title}}">
      <label for="content">Content</label>
      <textarea name="content" id="content" cols="30" rows="10" >{{$project->title}}</textarea>

      <input type="submit">
    </form>

  </section>
@endsection