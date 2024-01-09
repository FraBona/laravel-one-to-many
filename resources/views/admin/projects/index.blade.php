@extends('layouts.app');

@section('content')
<head>
  
</head>
  <section class="container">
    <h1>Projects</h1>
  </section>
  <section class="container">
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Title</th>
          <th>Slug</th>
          <th>edit</th>
          <th>delete</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($projects as $project)
          <tr>
            <td>{{$project->id}}</td>
            <td>
              <a href="{{route('admin.projects.show', $project)}}">{{$project->title}}</a>
            </td>
            <td>{{$project->slug}}</td>
            <td>
              <a href="{{route('admin.projects.edit', $project)}}">edit</a>
            </td>
            <td>
              <form action="{{route('admin.projects.destroy', $project)}}" method="post">
                @csrf
                @method('DELETE')

                <input type="submit" value="delete" onclick="return confirm('are you sure you want delete this item')">
              </form>
            </td>
          </tr>
        @empty
          <tr>
            <td>Nessun progetto</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </section>
@endsection