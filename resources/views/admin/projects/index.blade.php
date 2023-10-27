@extends('layouts.app')
@section('content')
<div class="container">
    @foreach ($projects as $project)
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
              <th scope="col">Title</th>
              <th scope="col">Content</th>
            </tr>
        </thead>
        <tbody>
        <td>{{$project->title}}</td>
        <td>{{$project->content}}</td> 
    </tr>



</tbody>
</table> 
    @endforeach
</div>
@endsection