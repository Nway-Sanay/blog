@extends('project.layout')

@section('title', 'Edit')

@section('content')

	<h1 class="title">Edit Project</h1>

	<form action="/projects/{{ $project->id }}" method="POST">
		{{ method_field('PATCH') }}
		{{ csrf_field() }}

		<div class="field">
		  <label class="label" for="title">Project Title</label>
		  <div class="control">
		    <input class="input" type="text" name="title" placeholder="title" autocomplete="off" value=" {{$project->title}} ">
		  </div>
		</div>

		<div class="field">
		  <label class="label" for="body">Project Description</label>
		  <div class="control">
		    <textarea class="textarea" name="body" placeholder="Description">{{ $project->body }}</textarea>
		  </div>
		</div>

		<div class="field is-grouped">
		  <div class="control">
		    <button class="button is-link">Submit</button>
		  </div>
		</div>

	</form>

	<form action="/projects/{{ $project->id }}" method="POST">
		@method('DELETE')
		@csrf
		<div class="field is-grouped">
		  <div class="control">
		    <button class="button">Delete</button>
		  </div>
		</div>
	</form>

@endsection