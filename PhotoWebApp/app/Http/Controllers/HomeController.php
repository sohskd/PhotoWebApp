<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		
		return view('picture.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		//
	}
	
	public function processflickrPhoto(Request $request){
		
		$lat = $request->input('Lat');
		$lon = $request->input('Lon');
		
		$url = 'https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=0af20797a13c65404a48cbccdd7d6e24&lat='.$lat.'&lon='.$lon.'&format=json&nojsoncallback=1';
		
	    $flickrOutput = file_get_contents($url);
		$a = 'https://farm1.staticflickr.com/2/1418878_1e92283336_m.jpg';
		$b = 'https://farm1.staticflickr.com/656/33007332980_cc2ceb8004_m.jpg';
		$image = array();

		$parsedJson = json_decode($flickrOutput);
		 
		for($i = 0; $i < count($parsedJson->photos->photo); $i++){
			$farm_id = $parsedJson->photos->photo[$i]->farm;
			$server_id = $parsedJson->photos->photo[$i]->server;
			$photo_id = $parsedJson->photos->photo[$i]->id;
			$secret = $parsedJson->photos->photo[$i]->secret;
			$httpUrl = 'https://farm' . $farm_id . '.staticflickr.com/' . $server_id . '/' .
			$photo_id . '_' . $secret . '_m.jpg';
	
			array_push($image, $httpUrl);
		}
		
		
		//echo $parsedJson->photos->photo[0]->secret;
		//echo $$parsedJson->photos->photo.size();
		
		//curl_close($ch);
		
		$outputFlickrData = array(   
		 	'flickrOutput' => $flickrOutput,
		 	'image' => $image
		 );
		 
    	 return view('picture.display')->with($outputFlickrData);

    }
}
