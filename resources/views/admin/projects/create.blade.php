@extends('layouts.app');

@section('content')
  <section class="container">
    <form action="{{route('admin.projects.store')}}" method="POST">
      @csrf
      <label for="title">Inserisci il titolo</label>
      <input type="text" id="title" name="title">
      <label for="content">Inserisci il contenuto</label>
      <textarea name="content" id="content" cols="30" rows="10"></textarea>

      <input type="submit">
    </form>
  </section>
@endsection