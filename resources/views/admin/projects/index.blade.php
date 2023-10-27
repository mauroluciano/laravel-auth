@extends('layouts.app')
@section('content')

<div class="container">

    @foreach ($projects as $project)
    <table class="table table-bordered table-striped m-3">
        <thead>
            <tr>
              <th scope="col">Title</th>
              <th scope="col">Content</th>
              @extends('layouts.app')
@section('content')

<div class="container">

    @foreach ($projects as $project)
    <table class="table table-bordered table-striped m-3">
        <thead>
            <tr>
              <th scope="col">Title</th>
              <th scope="col">Content</th>
              <th scope="col"></th>

            </tr>
        </thead>
        <tbody>
        <td>{{$project->title}}</td>
        <td>{{$project->content}}</td> 
        <td><a href="{{route('admin.projects.show', $project)}}">Mostra</a></td>

    </tr>



</tbody>
</table> 
    @endforeach
</div>
@endsection
            </tr>
        </thead>
        <tbody>
        <td>{{$project->title}}</td>
        <td>{{$project->content}}</td> 
        <td><a href="{{route('admin.projects.show', $project)}}">Mostra</a></td>

    </tr>



</tbody>
</table> 
    @endforeach
</div>
@endsection