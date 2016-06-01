<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Page Header here')
        <small>@yield('contentheader_description')</small>
    </h1>
    @hasSection('headerElems')
        <span class="headerElems">
        @yield('headerElems')
        </span>
    @else hasSection('section')
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> @hasSection('section') @yield('section') @else Level @endif</a></li>
        <li class="active">@hasSection('sub_section') @yield('sub_section') @else Here @endif</li>
    </ol>
    @endif
</section>