@extends('layouts.app')

@section('htmlheader_title')
	Book View
@endsection


@section('main-content')
<div id="page-content" class="profile2">
	<div class="bg-success clearfix">
		<div class="col-md-4">
			<div class="row">
				<div class="col-md-3">
					<!--<img class="profile-image" src="{{ asset('/img/avatar5.png') }}" alt="">-->
					<div class="profile-icon text-success"><i class="fa fa-cube"></i></div>
				</div>
				<div class="col-md-9">
					<h4 class="name">{{ $book->$view_col }}</h4>
					<div class="row stats">
						<div class="col-md-4"><i class="fa fa-facebook"></i> 234</div>
						<div class="col-md-4"><i class="fa fa-twitter"></i> 12</div>
						<div class="col-md-4"><i class="fa fa-instagram"></i> 89</div>
					</div>
					<p class="desc">Test Description in one line</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="dats1"><div class="label2">Admin</div></div>
			<div class="dats1"><i class="fa fa-envelope-o"></i> superadmin@gmail.com</div>
			<div class="dats1"><i class="fa fa-map-marker"></i> Pune, India</div>
		</div>
		<div class="col-md-4">
			<div class="teamview">
				<a class="face"><img src="{{ asset('/img/user1-128x128.jpg') }}" alt=""></a>
				<a class="face"><img src="{{ asset('/img/user2-160x160.jpg') }}" alt=""></a>
				<a class="face"><img src="{{ asset('/img/user3-128x128.jpg') }}" alt=""></a>
				<a class="face"><img src="{{ asset('/img/user4-128x128.jpg') }}" alt=""></a>
				<a class="face"><img src="{{ asset('/img/user5-128x128.jpg') }}" alt=""></a>
				<a class="face"><img src="{{ asset('/img/user6-128x128.jpg') }}" alt=""></a>
				<a class="face"><img src="{{ asset('/img/user7-128x128.jpg') }}" alt=""></a>
				<a class="face"><img src="{{ asset('/img/user8-128x128.jpg') }}" alt=""></a>
				<a class="face"><img src="{{ asset('/img/user5-128x128.jpg') }}" alt=""></a>
				<a class="face"><img src="{{ asset('/img/user6-128x128.jpg') }}" alt=""></a>
				<a class="face"><img src="{{ asset('/img/user7-128x128.jpg') }}" alt=""></a>
				<a class="face"><img src="{{ asset('/img/user8-128x128.jpg') }}" alt=""></a>
			</div>
		</div>
	</div>

	<ul data-toggle="ajax-tab" class="nav nav-tabs profile" role="tablist">
		<li class=""><a role="tab" data-toggle="tab" href="" data-target="#tab-timeline"> Timeline</a></li>
		<li class="active"><a role="tab" data-toggle="tab" class="active" href="#tab-general-info" data-target="#tab-general-info"> General Info</a></li>
		<li class=""><a role="tab" data-toggle="tab" href="" data-target="#tab-social-links"> Social Links</a></li>
		<li class=""><a role="tab" data-toggle="tab" href="" data-target="#tab-account-settings"> Account settings</a></li>
		<li class=""><a role="tab" data-toggle="tab" href="" data-target="#tab-job-info"> Job Info</a></li>
	</ul>

	<div class="tab-content">
		<div role="tabpanel" class="tab-pane fade in p20 bg-white" id="tab-timeline">
			<ul class="timeline timeline-inverse">
				<!-- timeline time label -->
				<li class="time-label">
					<span class="bg-red">
						10 Feb. 2014
					</span>
				</li>
				<!-- /.timeline-label -->
				<!-- timeline item -->
				<li>
				<i class="fa fa-envelope bg-blue"></i>

				<div class="timeline-item">
					<span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

					<h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

					<div class="timeline-body">
					Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
					weebly ning heekya handango imeem plugg dopplr jibjab, movity
					jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
					quora plaxo ideeli hulu weebly balihoo...
					</div>
					<div class="timeline-footer">
					<a class="btn btn-primary btn-xs">Read more</a>
					<a class="btn btn-danger btn-xs">Delete</a>
					</div>
				</div>
				</li>
				<!-- END timeline item -->
				<!-- timeline item -->
				<li>
				<i class="fa fa-user bg-aqua"></i>

				<div class="timeline-item">
					<span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

					<h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request
					</h3>
				</div>
				</li>
				<!-- END timeline item -->
				<!-- timeline item -->
				<li>
				<i class="fa fa-comments bg-yellow"></i>

				<div class="timeline-item">
					<span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

					<h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

					<div class="timeline-body">
					Take me to your leader!
					Switzerland is small and neutral!
					We are more like Germany, ambitious and misunderstood!
					</div>
					<div class="timeline-footer">
					<a class="btn btn-warning btn-flat btn-xs">View comment</a>
					</div>
				</div>
				</li>
				<!-- END timeline item -->
				<!-- timeline time label -->
				<li class="time-label">
					<span class="bg-green">
						3 Jan. 2014
					</span>
				</li>
				<!-- /.timeline-label -->
				<!-- timeline item -->
				<li>
				<i class="fa fa-camera bg-purple"></i>

				<div class="timeline-item">
					<span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

					<h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

					<div class="timeline-body">
					<img src="http://placehold.it/150x100" alt="..." class="margin">
					<img src="http://placehold.it/150x100" alt="..." class="margin">
					<img src="http://placehold.it/150x100" alt="..." class="margin">
					<img src="http://placehold.it/150x100" alt="..." class="margin">
					</div>
				</div>
				</li>
				<!-- END timeline item -->
				<li>
				<i class="fa fa-clock-o bg-gray"></i>
				</li>
			</ul>
			<!--<div class="text-center p30"><i class="fa fa-list-alt" style="font-size: 100px;"></i> <br> No posts to show</div>-->
			
		</div>
		<div role="tabpanel" class="tab-pane active fade in" id="tab-general-info">
			<div class="tab-content">
				{!! Form::model($book, ['route' => ['employee.store', $book->id ], 'method'=>'PUT', 'id' => 'general-info-form', 'class' => 'general-form dashed-row white']) !!}
					{!! Form::hidden('operation', 'saveProfileGI') !!}
					<div class="panel">
						<div class="panel-default panel-heading">
							<h4> General Info</h4>
						</div>
						<div class="panel-body">
							<div class="form-group">
								{!! Form::label('name', 'Name :', array('class' => 'col-md-2')) !!}
								<div class=" col-md-10">
									{!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Name']) !!}
								</div>
							</div>
							<div class="form-group">
								{!! Form::label('mobile', 'Mobile :', array('class' => 'col-md-2')) !!}
								<div class=" col-md-10">
									{!! Form::text('mobile', null, ['class'=>'form-control', 'placeholder'=>'Name']) !!}
								</div>
							</div>
							<div class="form-group">
								{!! Form::label('mobile2', 'Alternative Mobile :', array('class' => 'col-md-2')) !!}
								<div class=" col-md-10">
									{!! Form::text('mobile2', null, ['class'=>'form-control', 'placeholder'=>'Alternative Mobile']) !!}
								</div>
							</div>
							<div class="form-group">
								{!! Form::label('mobile', 'Mobile :', array('class' => 'col-md-2')) !!}
								<div class=" col-md-10">
									{!! Form::text('mobile', null, ['class'=>'form-control', 'placeholder'=>'Mobile']) !!}
								</div>
							</div>
							<div class="form-group">
								{!! Form::label('address', 'Address :', array('class' => 'col-md-2')) !!}
								<div class=" col-md-10">
									{!! Form::textarea('address', null, ['class'=>'form-control', 'placeholder'=>'Mailing Address', 'cols' => 40, 'rows' => 10]) !!}
								</div>
							</div>
							<div class="form-group">
								{!! Form::label('about', 'About :', array('class' => 'col-md-2')) !!}
								<div class=" col-md-10">
									{!! Form::textarea('about', null, ['class'=>'form-control', 'placeholder'=>'About', 'cols' => 40, 'rows' => 10]) !!}
								</div>
							</div>
							
							<div class="form-group">
								{!! Form::label('date_birth', 'Date of birth :', array('class' => 'col-md-2')) !!}
								<div class=" col-md-10">
									{!! Form::text('date_birth', null, ['class'=>'form-control', 'placeholder'=>'Date of birth']) !!}
								</div>
							</div>
							
							<div class="form-group">
								{!! Form::label('date_hire', 'Hiring Date :', array('class' => 'col-md-2')) !!}
								<div class=" col-md-10">
									{!! Form::text('date_hire', null, ['class'=>'form-control', 'placeholder'=>'Hiring Date']) !!}
								</div>
							</div>
							
							<div class="form-group">
								{!! Form::label('date_left', 'Date of Resignation :', array('class' => 'col-md-2')) !!}
								<div class=" col-md-10">
									{!! Form::text('date_left', null, ['class'=>'form-control', 'placeholder'=>'Date of Resignation']) !!}
								</div>
							</div>
							
							<div class="form-group">
								{!! Form::label('salary_cur', 'Current Salary :', array('class' => 'col-md-2')) !!}
								<div class=" col-md-10">
									{!! Form::text('salary_cur', null, ['class'=>'form-control', 'placeholder'=>'Current Salary']) !!}
								</div>
							</div>
							
							<div class="form-group">
								{!! Form::label('gender', 'Gender :', array('class' => 'col-md-2')) !!}
								<div class=" col-md-10">
									<input type="radio" name="gender" value="male" {{ $book->gender == "male" ? 'checked="checked"' : '' }}> <label for="gender_male" class="mr15">Male</label>
									<input type="radio" name="gender" value="female" {{ $book->gender == "female" ? 'checked="checked"' : '' }}> <label for="gender_female" class="">Female</label>
								</div>
							</div>
						</div>
						<div class="panel-footer">
							<button type="submit" class="btn btn-primary"><span class="fa fa-check-circle"></span> Save</button>
						</div>
					</div>
				{!! Form::close() !!}
			</div>
			@push("scripts")
<script>
$(function() {
	$("#general-info-form").validate({
		rules: {
			name: {required: true, minlength: 5}
		},
		submitHandler: function(form) {
			console.log("Test done");
			return false;
		}
	});
});
</script>
			@endpush
		</div>
		<div role="tabpanel" class="tab-pane fade" id="tab-social-links">
			<div class="tab-content">
				<form action="" id="social-links-form" class="general-form dashed-row white" role="form" method="post" accept-charset="utf-8" novalidate="novalidate">
					<div class="panel">
						<div class="panel-default panel-heading">
							<h4> Social Links</h4>
						</div>
						<div class="panel-body">
							<div class="form-group">
								<label for="facebook" class=" col-md-2">Facebook</label>
								<div class=" col-md-10">
									<input type="text" name="facebook" value="" id="facebook" class="form-control" placeholder="https://www.facebook.com/">
								</div>
							</div>
							<div class="form-group">
								<label for="twitter" class=" col-md-2">Twitter</label>
								<div class=" col-md-10">
									<input type="text" name="twitter" value="" id="twitter" class="form-control" placeholder="https://twitter.com/">
								</div>
							</div>
							<div class="form-group">
								<label for="linkedin" class=" col-md-2">Linkedin</label>
								<div class=" col-md-10">
									<input type="text" name="linkedin" value="" id="linkedin" class="form-control" placeholder="https://www.linkedin.com/">
								</div>
							</div>
							<div class="form-group">
								<label for="googleplus" class=" col-md-2">Google plus</label>
								<div class=" col-md-10">
									<input type="text" name="googleplus" value="" id="googleplus" class="form-control" placeholder="https://plus.google.com/">
								</div>
							</div>
							<div class="form-group">
								<label for="digg" class=" col-md-2">Digg</label>
								<div class=" col-md-10">
									<input type="text" name="digg" value="" id="digg" class="form-control" placeholder="http://digg.com/">
								</div>
							</div>
							<div class="form-group">
								<label for="youtube" class=" col-md-2">youtube</label>
								<div class=" col-md-10">
									<input type="text" name="youtube" value="" id="youtube" class="form-control" placeholder="https://www.youtube.com/">
								</div>
							</div>
							<div class="form-group">
								<label for="pinterest" class=" col-md-2">Pinterest</label>
								<div class=" col-md-10">
									<input type="text" name="pinterest" value="" id="pinterest" class="form-control" placeholder="https://www.pinterest.com/">
								</div>
							</div>
							<div class="form-group">
								<label for="instagram" class=" col-md-2">Instagram</label>
								<div class=" col-md-10">
									<input type="text" name="instagram" value="" id="instagram" class="form-control" placeholder="https://instagram.com/">
								</div>
							</div>
							<div class="form-group">
								<label for="github" class=" col-md-2">Github</label>
								<div class=" col-md-10">
									<input type="text" name="github" value="" id="github" class="form-control" placeholder="https://github.com/">
								</div>
							</div>
							<div class="form-group">
								<label for="tumblr" class=" col-md-2">Tumblr</label>
								<div class=" col-md-10">
									<input type="text" name="tumblr" value="" id="tumblr" class="form-control" placeholder="https://www.tumblr.com/">
								</div>
							</div>
							<div class="form-group">
								<label for="vine" class=" col-md-2">Vine</label>
								<div class=" col-md-10">
									<input type="text" name="vine" value="" id="vine" class="form-control" placeholder="https://vine.co/">
								</div>
							</div>
						</div>
						<div class="panel-footer">
							<button type="submit" class="btn btn-primary"><span class="fa fa-check-circle"></span> Save</button>
						</div>
					</div>
				</form>
			</div>
			
		</div>
		<div role="tabpanel" class="tab-pane fade" id="tab-job-info">
			<div class="tab-content">
				<form action="" id="job-info-form" class="general-form dashed-row white" role="form" method="post" accept-charset="utf-8" novalidate="novalidate">

					<input name="user_id" type="hidden" value="1">
					<div class="panel">
						<div class="panel-default panel-heading">
							<h4>Job Info</h4>
						</div>
						<div class="panel-body">
							<div class="form-group">
								<label for="job_title" class=" col-md-2">Job Title</label>
								<div class="col-md-10">
									<input type="text" name="job_title" value="Admin" id="job_title" class="form-control" placeholder="Job Title">
								</div>
							</div>
							<div class="form-group">
								<label for="salary" class=" col-md-2">Salary</label>
								<div class="col-md-10">
									<input type="text" name="salary" value="" id="salary" class="form-control" placeholder="Salary">
								</div>
							</div>
							<div class="form-group">
								<label for="salary_term" class=" col-md-2">Salary term</label>
								<div class="col-md-10">
									<input type="text" name="salary_term" value="" id="salary_term" class="form-control" placeholder="Salary term">
								</div>
							</div>
							<div class="form-group">
								<label for="date_of_hire" class=" col-md-2">Date of hire</label>
								<div class="col-md-10">
									<input type="text" name="date_of_hire" value="" id="date_of_hire" class="form-control" placeholder="Date of hire">
								</div>
							</div>
						</div>

						<div class="panel-footer">
							<button type="submit" class="btn btn-primary"><span class="fa fa-check-circle"></span> Save</button>
						</div>

					</div>
				</form>
			</div>
			
		</div>
		<div role="tabpanel" class="tab-pane fade" id="tab-account-settings">
			<div class="tab-content">
				<form action="" id="account-info-form" class="general-form dashed-row white" role="form" method="post" accept-charset="utf-8" novalidate="novalidate">
					<div class="panel">
						<div class="panel-default panel-heading">
							<h4>Account settings</h4>
						</div>
						<div class="panel-body">
							<div class="form-group">
								<label for="email" class=" col-md-2">Email</label>
								<div class=" col-md-10">
									<input type="text" name="email" value="gdb.sci123@gmail.com" id="email" class="form-control" placeholder="Email" autocomplete="off" data-rule-email="1" data-msg-email="Please enter a valid email address." data-rule-required="1" data-msg-required="This field is required." aria-required="true">
								</div>
							</div>
							<div class="form-group">
								<label for="password" class=" col-md-2">Password</label>
								<div class=" col-md-10">
									<input type="password" name="password" value="" id="password" class="form-control" placeholder="Password" autocomplete="off" data-rule-minlength="6" data-msg-minlength="Please enter at least 6 characters.">
								</div>
							</div>
							<div class="form-group">
								<label for="retype_password" class=" col-md-2">Retype password</label>
								<div class=" col-md-10">
									<input type="password" name="retype_password" value="" id="retype_password" class="form-control" placeholder="Retype password" autocomplete="off" data-rule-equalto="#password" data-msg-equalto="Please enter the same value again.">
								</div>
							</div>

							<div class="form-group">
								<label for="role" class=" col-md-2">Role</label>
								<div class=" col-md-10">
									<div class="ml15">Admin</div>
								</div>
							</div>

						</div>
						<div class="panel-footer">
							<button type="submit" class="btn btn-primary"><span class="fa fa-check-circle"></span> Save</button>
						</div>
					</div>
				</form>
			</div>
			
		</div>
		
	</div>
	</div>
	</div>
</div>
@endsection
