@extends("layouts.app")

@section("contentheader_title", "Edit book: ")
@section("contentheader_description", $book->$view_col)
@section("section", "Books")
@section("sub_section", "Edit")

@section("htmlheader_title", "Book Edit : ".$book->$view_col)

@section("main-content")
<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($book, ['route' => ['books.update', $book->id ], 'method'=>'PUT', 'id' => 'book-edit-form']) !!}
					@laform_field($module, 'name')
					@laform_field($module, 'author')
					@laform_field($module, 'author_address')
					@laform_field($module, 'price')
					@laform_field($module, 'weight')
					@laform_field($module, 'pages')
					@laform_field($module, 'genre')
					@laform_field($module, 'publisher')
					@laform_field($module, 'status')
					@laform_field($module, 'media_type')
					@laform_field($module, 'description')
					@laform_field($module, 'restricted')
					@laform_field($module, 'email')
					@laform_field($module, 'mobile')
					@laform_field($module, 'preview')
					@laform_field($module, 'website')
					@laform_field($module, 'date_release')
					@laform_field($module, 'time_started')
					<br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url('/books') }}">Cancel</a></button>
					</div>
				{!! Form::close() !!}
				
				@if($errors->any())
				<ul class="alert alert-danger">
					@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
				@endif
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
	$("#book-edit-form").validate({
		
	});
});
</script>
@endpush