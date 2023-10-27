@extends('layouts.app')
@section('content')
<div class="container">
    <a href="{{ route('admin.projects.index')}}">Torna alla lista</a>
<h2>{{$project->title}}</h2>
<p>{{$project->content}}</p>
</div>
@endsection