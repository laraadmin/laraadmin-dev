@extends("layouts.app")

@section("contentheader_title", "Edit listing: {{ $inquiry->name }}")
@section("contentheader_description", "")
@section("section", "Inquiries")
@section("sub_section", "edit")

@section("main-content")
<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($inquiry, ['route' => ['inquiries.update', $inquiry->id ], 'method'=>'PUT']) !!}
				<div class="form-group">
					{!! Form::label('name', 'Name :') !!}
					{!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Name']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('email', 'Email :') !!}
                   	{!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Email']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('phone', 'Phone :') !!}
                    {!! Form::tel('phone', null, ['class'=>'form-control', 'placeholder'=>'Phone']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('ref_add', 'Is Reference :') !!}
					
					<input id="ref_add" name="ref_add" type="checkbox" @if($inquiry->ref == 1) checked="checked" @endif value="1">
					<div class="Switch Round @if($inquiry->ref == 1) On @else Off @endif" style="vertical-align:top;margin-left:10px;">
						<div class="Toggle"></div>
					</div>
				</div>
				<br>
				<div class="form-group">
					{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url('/inquiries') }}">Go Back</a></button>
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
	
});
</script>
@endpush