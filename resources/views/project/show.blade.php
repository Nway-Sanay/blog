@extends('project.layout')

@section('title', 'Home')

@section('content')
	<h1 class="title"> {{ $project->title }} </h1>

	<div class="content">
		{{ $project->body }}
	</div>

	<br>
	<a href="/projects/{{ $project->id }}/edit">Edit</a>
	<br><br>
	<div class="box">
		<ul>
			@foreach($project->tasks as $task)
				<li>
					<form method="POST" action="/tasks/{{ $task->id }}">
						@csrf
						@method('PATCH')
						<label class="checkbox {{ $task->completed ? 'is_complete' : ''}}"><input type="checkbox" name="completed" onchange="this.form.submit()" {{ $task->completed ? 'checked' : ''}}> {{ $task->description }}</label>	
					</form>
				</li>
			@endforeach
		</ul>
	</div>

	<div class="box">
		<form method="POST" action="/project/{{$project->id}}/task">
			@csrf
			<div class="field">
			  <label class="label" for="title">Add Task</label>
			  <div class="control">
			    <input class="input {{$errors->has('description') ? 'is-danger' : ''}}" type="text" name="description" placeholder="Task Description" autocomplete="off">
			  </div>
			</div>

			<div class="field is-grouped">
			  <div class="control">
			    <button class="button is-link">Add</button>
			  </div>
			</div>

			@include('project.error')

		</form>
		
	</div>

@endsection