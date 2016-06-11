@extends("layouts.app")

@section("contentheader_title", "Books")
@section("contentheader_description", "books listing")
@section("section", "Books")
@section("sub_section", "Listing")

@section("htmlheader_title", "Books Listing")

@section("headerElems")
<button class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#AddModal">Add Book</button>
@endsection

@section("main-content")

<div class="box box-success">
	<!--<div class="box-header"></div>-->
	<div class="box-body">
		<table id="example1" class="table table-bordered">
		<thead>
		<tr class="success">
			@foreach( $listing_cols as $col )
			<th>{{ $module->fields[$col]['label'] or ucfirst($col) }}</th>
			@endforeach
			@if($show_actions)
			<th>Actions</th>
			@endif
		</tr>
		</thead>
		<tbody>
			
		</tbody>
		</table>
	</div>
</div>


<div class="modal fade" id="AddModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Add Inquiry</h4>
			</div>
			{!! Form::open(['action' => 'BooksController@store', 'id' => 'book-add-form']) !!}
			<div class="modal-body">
				<div class="box-body">
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
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				{!! Form::submit( 'Submit', ['class'=>'btn btn-success']) !!}
			</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>

@endsection

@push('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('/plugins/datatables/datatables.min.css') }}"/>
@endpush

@push('scripts')
<script src="{{ asset('/plugins/datatables/datatables.min.js') }}"></script>
<script>
$(function () {
	$("#example1").DataTable({
		processing: true,
        serverSide: true,
        ajax: "{{ url('book_dt_ajax') }}",
		language: {
			lengthMenu: "_MENU_",
			search: "_INPUT_",
			searchPlaceholder: "Search"
		},
		@if($show_actions)
		columnDefs: [ { orderable: false, targets: [-1] }],
		@endif
	});
	$("#book-add-form").validate({
		
	});
});
</script>
@endpush