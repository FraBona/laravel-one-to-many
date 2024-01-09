@extends('layouts.app');

@section('content')
  <section class="container">
    <form action="{{route('admin.projects.store')}}" method="POST">
      @csrf
      <label for="title">Inserisci il titolo</label>
      <input type="text" id="title" name="title">
      <label for="content">Inserisci il contenuto</label>
      <textarea name="content" id="content" cols="30" rows="10"></textarea>
      <label for="type_id">Tipologia del contenuto</label>
      <select name="type_id" id="type_id">
        <option>Seleziona categoria</option>
        @foreach ($types as $type)
          <option @selected( old('type_id') === $type->id) value="{{$type->id}}">{{$type->name}}</option>
        @endforeach
      </select>
      <input type="submit">
    </form>
  </section>
@endsection