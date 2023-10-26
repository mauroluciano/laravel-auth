@extends('layout.app')
@section('content')
<div>
    @foreach ($projects as $project)
          @dump($project)
  
    @endforeach
</div>
@endsection