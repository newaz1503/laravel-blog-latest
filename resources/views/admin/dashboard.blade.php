@extends('admin.layouts.app')

@section('title')

@push('css')
    
@endpush

 @section('content')
 <ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Home</a> 
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Dashboard</a></li>
</ul>

<div class="row-fluid">
    
    <div class="span3 statbox purple" onTablet="span6" onDesktop="span3">
        <div class="boxchart">5,6,7,2,0,4,2,4,8,2,3,3,2</div>
        <div class="number">854<i class="icon-arrow-up"></i></div>
        <div class="title">visits</div>
        <div class="footer">
            <a href="#"> read full report</a>
        </div>	
    </div>
    <div class="span3 statbox green" onTablet="span6" onDesktop="span3">
        <div class="boxchart">1,2,6,4,0,8,2,4,5,3,1,7,5</div>
        <div class="number">123<i class="icon-arrow-up"></i></div>
        <div class="title">sales</div>
        <div class="footer">
            <a href="#"> read full report</a>
        </div>
    </div>
    <div class="span3 statbox blue noMargin" onTablet="span6" onDesktop="span3">
        <div class="boxchart">5,6,7,2,0,-4,-2,4,8,2,3,3,2</div>
        <div class="number">982<i class="icon-arrow-up"></i></div>
        <div class="title">orders</div>
        <div class="footer">
            <a href="#"> read full report</a>
        </div>
    </div>
    <div class="span3 statbox yellow" onTablet="span6" onDesktop="span3">
        <div class="boxchart">7,2,2,2,1,-4,-2,4,8,,0,3,3,5</div>
        <div class="number">678<i class="icon-arrow-down"></i></div>
        <div class="title">visits</div>
        <div class="footer">
            <a href="#"> read full report</a>
        </div>
    </div>	
    
</div>		
 @endsection

@push('script')
    
		<script src="{{asset('assets/backend/js/excanvas.js')}}"></script>
		<script src="{{asset('assets/backend/js/jquery.flot.js')}}"></script>
		<script src="{{asset('assets/backend/js/jquery.flot.pie.js')}}"></script>
		<script src="{{asset('assets/backend/js/jquery.flot.stack.js')}}"></script>
		<script src="{{asset('assets/backend/js/jquery.flot.resize.min.js')}}"></script>
	
		<script src="{{asset('assets/backend/js/jquery.chosen.min.js')}}"></script>
	
		<script src="{{asset('assets/backend/js/jquery.uniform.min.js')}}"></script>
		
		<script src="{{asset('assets/backend/js/jquery.cleditor.min.js')}}"></script>
	
		<script src="{{asset('assets/backend/js/jquery.noty.js')}}"></script>
	
		<script src="{{asset('assets/backend/js/jquery.elfinder.min.js')}}"></script>
	
		<script src="{{asset('assets/backend/js/jquery.raty.min.js')}}"></script>
	
		<script src="{{asset('assets/backend/js/jquery.iphone.toggle.js')}}"></script>
	
		<script src="{{asset('assets/backend/js/jquery.uploadify-3.1.min.js')}}"></script>
	
		<script src="{{asset('assets/backend/js/jquery.gritter.min.js')}}"></script>
	
		<script src="{{asset('assets/backend/js/jquery.imagesloaded.js')}}"></script>
	
		<script src="{{asset('assets/backend/js/jquery.masonry.min.js')}}"></script>
	
		<script src="{{asset('assets/backend/js/jquery.knob.modified.js')}}"></script>
	
		<script src="{{asset('assets/backend/js/jquery.sparkline.min.js')}}"></script>
	
		<script src="{{asset('assets/backend/js/counter.js')}}"></script>
	
		<script src="{{asset('assets/backend/js/retina.js')}}"></script>
@endpush