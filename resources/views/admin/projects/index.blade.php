@extends('layouts.app')
@section('content')

<div class='container'>
    <a href="{{route('admin.projects.create')}}" class="btn btn-primary">Crea uno nuovo</a>
@foreach ($projects as $project)
    <table class="table table-bordered table-striped m-3">
        <thead>
            <tr>
              <th scope="col">Titolo</th>
              <th scope="col">Contenuto</th>
              <th scope="col">Opzioni</th>

            </tr>
        </thead>
        <tbody>
        <td>{{$project->title}}</td>
        <td>{{$project->content}}</td> 
        <td><span><a href="{{route('admin.projects.show', $project)}}">Mostra</a></span>
            <span><a href="{{route('admin.projects.edit', $project)}}">Modifica</a></span>
            <span><a href="{{route('admin.projects.destroy', $project)}}">Elimina</a></span>

        </td>



    </tr>



</tbody>
</table> 
    @endforeach
</div>
@endsection