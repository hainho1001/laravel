@extends('posts.master')

@section('content')
	<div class="row">
		<div class="col-12">
			<div class="float-left">
				<h3>Add New Post</h3>
			</div>
		</div>
	</div>

	@if (count($errors) > 0)
		<div class="alert alert-danger">
			<strong>Whooops!</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit <br>
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

	{!! Form::model($post, ['method'=>'PATCH', 'route'=>['posts.update', $post->id]]) !!}
		@include('posts.form')
	{!! Form::close() !!}

@endsection