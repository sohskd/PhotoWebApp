@extends('layout.index')

@section('title', 'Welcome')

@section('page_level_style')
  
@endsection

@section('head')
    
@endsection

@section('content')
@foreach ($image as $image1)
	<img src="{{$image1}}" width="100" height="100">
@endforeach
@endsection

@section('page_level_plugin_js')

@endsection

@section('page_level_script')
    
@endsection