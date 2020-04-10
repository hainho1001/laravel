<div class="row">
	<div class="col-12">
		<div class="form-group">
			<strong>Title : </strong>
			{!! Form::text('title',null, ['placeholder'=>'Title', 'class'=>'form-control' ]) !!}
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<strong>Body : </strong>
			{!! Form::textarea('body',null, ['placeholder'=>'Body', 'class'=>'form-control' ]) !!}
		</div>
	</div>
	<div class="col-12">
		<a class="btn btn-xs btn-success" href="{{ route('posts.index') }}">Back</a>
		<button type="submit" class="btn btn-xs btn-primary" name="button">Submit</button>
	</div>
</div>