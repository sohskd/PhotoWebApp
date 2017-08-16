@extends('layout.index')

@section('title', 'Welcome')

@section('page_level_style')
  
@endsection

@section('head')
    
@endsection

@section('content')
{!! Form::open(array('route' => 'processflickrPhoto', 'class' => 'form')) !!}

<div class="row">
	<div class="col-lg-4">
		<div class="row">
			<div class="col-lg-8">
				<div class="form-group">
				    {!! Form::label('Your Latitude') !!}
				    {!! Form::text('Lat', null, 
				        array('required', 
				              'class'=>'form-control', 
				              'placeholder'=>'Your latitude')) !!}
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8">
				<div class="form-group">
				    {!! Form::label('Your Longtitude') !!}
				    {!! Form::text('Lon', null, 
				        array('required', 
				              'class'=>'form-control', 
				              'placeholder'=>'Your longtitude')) !!}
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8">
				<div class="form-group">
				    {!! Form::submit('Find Me Photos!', 
				      array('class'=>'btn btn-primary')) !!}
				</div>
			</div>
		</div>
	</div>
</div>
{!! Form::close() !!}
@endsection

@section('page_level_plugin_js')

@endsection

@section('page_level_script')
    
@endsection

