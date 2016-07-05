@extends("la.layouts.app")

@section("contentheader_title", "Uploads")
@section("contentheader_description", "Uploaded images & files")
@section("section", "Uploads")
@section("sub_section", "Listing")
@section("htmlheader_title", "Uploaded images & files")

@section("headerElems")
<button id="AddNewUploads" class="btn btn-success btn-sm pull-right">Add New</button>
@endsection

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ url(config('laraadmin.adminRoute') . '/upload_files')}}" id="fm_dropzone_main" enctype="multipart/form-data" method="POST">
    {{ csrf_field() }}
    <a id="closeDZ1"><i class="fa fa-times"></i></a>
    <div class="dz-message"><i class="fa fa-cloud-upload"></i><br>Drop files here to upload</div>
</form>

<div class="box box-success">
	<!--<div class="box-header"></div>-->
	<div class="box-body">
		<ul class="files_container">

        </ul>
	</div>
</div>


<div class="modal fade" id="EditFileModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document" style="width:70%;">
		<div class="modal-content">
			<div class="modal-header">
				
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <button type="button" class="next"><i class="fa fa-chevron-right"></i></button>
                <button type="button" class="prev"><i class="fa fa-chevron-left"></i></button>
				<h4 class="modal-title" id="myModalLabel">File: </h4>
			</div>
			<div class="modal-body p0">
                    <div class="row m0">
                        <div class="col-xs-8 col-sm-8 col-md-8">
                            <div class="fileObject">
                                
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <form class="file-info-form">
                                <div class="form-group">
                                    <label for="url">URL</label>
                                    <input class="form-control" placeholder="URL" name="url" type="text" readonly value="">
                                </div>
                                <div class="form-group">
                                    <label for="label">Label</label>
                                    <input class="form-control" placeholder="Label" name="label" type="text" value="">
                                </div>
                            </form>
                        </div>
                    </div><!--.row-->
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger">Delete</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

@endsection

@push('styles')

@endpush

@push('scripts')
<script>
var bsurl = $('body').attr("bsurl");
var fm_dropzone_main = null;
var cntFiles = null;
$(function () {
	fm_dropzone_main = new Dropzone("#fm_dropzone_main", {
        maxFilesize: 2,
        acceptedFiles: "image/*,application/pdf",
        init: function() {
            this.on("complete", function(file) {
                this.removeFile(file);
            });
            this.on("success", function(file) {
                console.log("addedfile");
                console.log(file);
                loadUploadedFiles();
            });
        }
    });
    $("#fm_dropzone_main").slideUp();
    $("#AddNewUploads").on("click", function() {
        $("#fm_dropzone_main").slideDown();
    });
    $("#closeDZ1").on("click", function() {
        $("#fm_dropzone_main").slideUp();
    });
    $("body").on("click", "ul.files_container .fm_file_sel", function() {
        var upload = $(this).attr("upload");
        upload = JSON.parse(upload);
        $("#EditFileModal .fileObject").empty();

        if($.inArray(upload.extension, ["jpg", "jpeg", "png", "gif", "bmp"]) > -1) {
            $("#EditFileModal .fileObject").append('<img src="'+bsurl+'/files/'+upload.hash+'/'+upload.name+'">');
        } else {

        }
        $("#EditFileModal").modal('show');
    });
    loadUploadedFiles();
});
function loadUploadedFiles() {
    // load folder files
    $.ajax({
        dataType: 'json',
        url: $('body').attr("bsurl")+"/admin/uploaded_files",
        success: function ( json ) {
            console.log(json);
            cntFiles = json.uploads;
            $("ul.files_container").empty();
            if(cntFiles.length) {
                for (var index = 0; index < cntFiles.length; index++) {
                    var element = cntFiles[index];
                    var li = formatFile(element);
                    $("ul.files_container").append(li);
                }
            } else {
                $("ul.files_container").html("<div class='text-center text-danger' style='margin-top:40px;'>No Files</div>");
            }
        }
    });
}
function formatFile(upload) {
    var image = '';
    if($.inArray(upload.extension, ["jpg", "jpeg", "png", "gif", "bmp"]) > -1) {
        image = '<img src="'+bsurl+'/files/'+upload.hash+'/'+upload.name+'?s=130">';
    } else {
        switch (upload.extension) {
            case "pdf":
                image = '<i class="fa fa-file-pdf-o"></i>';
                break;
            default:
                image = '<i class="fa fa-file-text-o"></i>';
                break;
        }
    }
    return '<li><a class="fm_file_sel" data-toggle="tooltip" data-placement="top" title="'+upload.name+'" upload=\''+JSON.stringify(upload)+'\'>'+image+'</a></li>';
}
</script>
@endpush