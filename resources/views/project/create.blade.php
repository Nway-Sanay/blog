@extends('project.layout')

@section('title', 'Create')

@section('content')

	<h1>Create Project</h1>

	<form action="/projects" method="POST">
		{{ csrf_field() }}
		<div class="field">
		  <label class="label" for="title">Project Title</label>
		  <div class="control">
		    <input class="input" type="text" name="title" placeholder="title" autocomplete="off">
		  </div>
		</div>

		<div class="field">
		  <label class="label" for="body">Project Description</label>
		  <div class="control">
		    <textarea class="textarea" name="body" placeholder="Description"></textarea>
		  </div>
		</div>

		<div class="field is-grouped">
		  <div class="control">
		    <button class="button is-link">Submit</button>
		  </div>
		</div>

	</form>

@endsection