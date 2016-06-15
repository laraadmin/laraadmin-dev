@extends("layouts.app")

@section("contentheader_title", "Edit Field: ".$field->label)
@section("contentheader_description", $field->label)
@section("section", "Module Fields")
@section("sub_section", "Edit")

@section("htmlheader_title", "Field Edit : ".$field->label)

@section("main-content")
<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($field, ['route' => ['module_fields.update', $field->id ], 'method'=>'PUT', 'id' => 'field-edit-form']) !!}
					
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url('/courses') }}">Cancel</a></button>
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
	$("#field-edit-form").validate({
		
	});
});
</script>
@endpush