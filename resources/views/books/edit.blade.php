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
					@sbsform_field($module, 'name')
					@sbsform_field($module, 'author')
					@sbsform_field($module, 'author_address')
					@sbsform_field($module, 'price')
					@sbsform_field($module, 'weight')
					@sbsform_field($module, 'pages')
					@sbsform_field($module, 'genre')
					@sbsform_field($module, 'publisher')
					@sbsform_field($module, 'status')
					@sbsform_field($module, 'media_type')
					@sbsform_field($module, 'description')
					@sbsform_field($module, 'restricted')
					@sbsform_field($module, 'email')
					@sbsform_field($module, 'mobile')
					@sbsform_field($module, 'preview')
					@sbsform_field($module, 'website')
					@sbsform_field($module, 'date_release')
					@sbsform_field($module, 'time_started')
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