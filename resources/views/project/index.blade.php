@extends('project.layout')

@section('title', 'Home')

@section('content')
	<h1 class="title">Projects</h1>

	<ul>
		@foreach($projects as $project)
			<li> 
				<a href="/projects/{{ $project->id }}"> {{ $project->title }} </a>
			</li>
		@endforeach
	</ul>
	<br><br>
	<a href="/projects/create">Create</a>
@endsection