@extends('layout.index')

@section('title', 'Welcome')

@section('page_level_style')
<link href="/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
<link href="/assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
<link href="/assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
<link href="/assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />    
@endsection

@section('head')
    
@endsection

@section('content')       
<div class="blog-page blog-content-2">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <div class="blog-single-content bordered blog-container">
				<div class="blog-comments">
				    <h3 class="sbold blog-comments-title">Leave A Comment</h3>
				    <form method="post" action='.' >
				        <div class="form-group">
				            <input name="title" type="text" placeholder="Your Name" class="form-control c-square"> </div>				       
				        <div class="form-group">
				            <textarea name="body" rows="8" name="message" placeholder="Write comment here ..." class="form-control c-square"></textarea>
				        </div>
				        <div class="form-group">
				            <button type="submit" class="btn blue uppercase btn-md sbold btn-block">Submit</button>
				        </div>
				        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
				    </form> 				   
				</div>
			</div>	    
		</div>
	</div>
</div>
@endsection

@section('page_level_plugin_js')
<script src="/assets/global/plugins/moment.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/amcharts/amcharts/amcharts.js" type="text/javascript"></script>
<script src="/assets/global/plugins/amcharts/amcharts/serial.js" type="text/javascript"></script>
<script src="/assets/global/plugins/amcharts/amcharts/pie.js" type="text/javascript"></script>
<script src="/assets/global/plugins/amcharts/amcharts/radar.js" type="text/javascript"></script>
<script src="/assets/global/plugins/amcharts/amcharts/themes/light.js" type="text/javascript"></script>
<script src="/assets/global/plugins/amcharts/amcharts/themes/patterns.js" type="text/javascript"></script>
<script src="/assets/global/plugins/amcharts/amcharts/themes/chalk.js" type="text/javascript"></script>
<script src="/assets/global/plugins/amcharts/ammap/ammap.js" type="text/javascript"></script>
<script src="/assets/global/plugins/amcharts/ammap/maps/js/worldLow.js" type="text/javascript"></script>
<script src="/assets/global/plugins/amcharts/amstockcharts/amstock.js" type="text/javascript"></script>
<script src="/assets/global/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/horizontal-timeline/horizontal-timeline.js" type="text/javascript"></script>
<script src="/assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
@endsection

@section('page_level_script')
<script src="/assets/pages/scripts/dashboard.min.js" type="text/javascript"></script>    
@endsection