@extends("layouts.app")

@section("contentheader_title", "Books")
@section("contentheader_description", "book listing")
@section("section", "Books")
@section("sub_section", "Listing")
@section("headerElems")
<button class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#AddModal">Add Book</button>
@endsection

@section("main-content")

<?php
use App\User;
?>
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
		// submitHandler: function(form) {
		// 	$(form).submit();
		// 	return false;
		// }
	});
	// $('.Switch.Ajax').click(function() {
	// 	var state = "false";
	// 	if ($(this).hasClass('On')){
	// 		state = "false";
	// 	} else {
	// 		state = "true";
	// 	}
	// 	var _token = $(this).parent().find('#AddModal input[name=_token]').val();
	// 	$.ajax({
	// 		type: "POST",
	// 		url : "{{ url('/book/update_ajax') }}",
	// 		xhrFields: {
	// 			withCredentials: true
	// 		},
	// 		data : {
	// 			_token: _token,
	// 			type: "UPDATE_REF",
	// 			inqid: $(this).attr("inqid"),
	// 			state: state,
	// 		},
	// 		success : function(data){
	// 			console.log(data);
	// 		}
	// 	});
	// });
});
</script>
@endpush