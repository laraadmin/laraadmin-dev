@extends('la.layouts.app')

@section('htmlheader_title')
	Code Editor
@endsection


@section('main-content')
<div id="laeditor" class="row">
	<div class="col-md-2">
		<div class="la-header">
			LA Editor
			<!--<div class="la-dir">/Applications/MAMP/htdocs</div>-->
		</div>
		<div class="la-file-tree">
			
		</div>
	</div>
	<div class="col-md-10">
		<ul class="laeditor-tabs">
			
		</ul>
		<pre id="la-ace-editor"></pre>
	</div>
</div>
@endsection

@push('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('la-assets/plugins/jquery-filetree/jQueryFileTree.min.css') }}"/>
@endpush

@push('scripts')
<script src="{{ asset('la-assets/plugins/jquery-filetree/jQueryFileTree.min.js') }}"></script>
<script src="{{ asset('la-assets/plugins/ace/ace.js') }}" type="text/javascript" charset="utf-8"></script>
<script src="{{ asset('la-assets/plugins/ace/ext-modelist.js') }}" type="text/javascript" charset="utf-8"></script>

<script>
var $openFiles = [];
var laeditor = null;
$(function () {
	// Start Jquery File Tree
	$('.la-file-tree').fileTree({
		root: '/',
		script: "{{ url(config('laraadmin.adminRoute') . '/laeditor_get_dir?_token=' . csrf_token()) }}"
	}, function(file) {
		openFile(file);
		// do something with file
		// $('.selected-file').text( $('a[rel="'+file+'"]').text() );
	});
	
	// Start Ace editor
	laeditor = ace.edit("la-ace-editor");
    laeditor.setTheme("ace/theme/twilight");
    laeditor.session.setMode("ace/mode/javascript");
	laeditor.$blockScrolling = Infinity
	
	setEditorSize();
	
	$(window).resize(function() {
		setEditorSize();
	});
});
function setEditorSize() {
	var windowHeight = $(window).height();
	var editorHeight = windowHeight-50-31;
	var treeHeight = windowHeight-70-21;
	// console.log("windowHeight	: "+windowHeight);
	// console.log("editorHeight: "+editorHeight);
	// console.log("treeHeight: "+treeHeight);
	
	$(".la-file-tree").height(treeHeight+"px");
	$("#la-ace-editor").css("height", editorHeight+"px");
	$("#la-ace-editor").css("max-height", editorHeight+"px");
}
$laetabs = $(".laeditor-tabs");
function openFile(filepath) {
	console.log("openFile: "+filepath);
	if(!contains($openFiles, filepath)) {
		$openFiles.push(filepath);
		var filename = filepath.replace(/^.*[\\\/]/, '');
		$laetabs.append('<li filepath="'+filepath+'">'+filename+' <i class="fa fa-5x fa-times"></i></li>');
	} else {
		
	}
	highlightFileTab(filepath);
	loadFileCode(filepath);
	console.log($openFiles);
}

function highlightFileTab(filepath) {
	$laetabs.children("li").removeClass("active");
	$laetabs.children("li[filepath='"+filepath+"']").addClass("active");
}

function loadFileCode(filepath) {
	$.ajax({
		url: "{{ url(config('laraadmin.adminRoute') . '/laeditor_get_file?_token=' . csrf_token()) }}",
		method: 'POST',
		data: {filepath: filepath},
		success: function( data ) {
			//console.log(data);
			laeditor.setValue(data);
			
			
			var modelist = ace.require("ace/ext/modelist");
			var mode = modelist.getModeForPath(filepath).mode;
			laeditor.session.setMode(mode); // mode now contains "ace/mode/javascript".
			
			// var ext = filepath.split('.').pop();
			// console.log(ext);
			// switch(ext) {
			// 	case "css":
			// 	case "less":
			// 	case "sass":
			// 		laeditor.getSession().setMode("ace/mode/css");
			// 		break;
			// 	case "json":
			// 	case "js":
			// 		laeditor.getSession().setMode("ace/mode/javascript");
			// 		break;
			// 	case "php":
			// 		laeditor.getSession().setMode("ace/mode/php");
			// 		break;
			// 	default:
			// 		laeditor.getSession().setMode("ace/mode/text");
			// }
		}
	});
}

function contains(a, obj) {
    for (var i = 0; i < a.length; i++) {
        if (a[i] === obj) {
            return true;
        }
    }
    return false;
}
</script>
@endpush