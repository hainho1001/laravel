@extends('posts.master')

@section('content')
	<div class="row">
		<div class="col-12">
			<h3>Show Post</h3>
			<a class="btn btn-xs btn-primary" href="{{ route('posts.index') }}">Back</a>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="form-group">
				<strong>Title: </strong>
				{{ $post->title }}
			</div>
		</div>
		<div class="col-12">
			<div class="form-group">
				<strong>Body: </strong>
				{{ $post->body }}
			</div>
		</div>
	</div>
@endsection