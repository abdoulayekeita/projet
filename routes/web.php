<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $client = new \GuzzleHttp\Client();
    $request = $client->get('https://restcountries.eu/rest/v2/name/africa');
    $response = json_decode($request->getBody());
   
    //dd( $response );
  // $countries = Countries::all();
    //dd($countries); 
    return view('welcome');
});

Route::get('/registe', function () {
    $client = new \GuzzleHttp\Client();
    $request = $client->get('https://restcountries.eu/rest/v2/region/africa');
    //$request = $client->get('http://geodb-free-service.wirefreethought.com/v1/geo/countries/ML/regions?limit=5&offset=0');
    $col = json_decode($request->getBody());
    $col=collect( $col );
    $rapid = new RapidApi\RapidApiConnect('ProjectName', 'ProjectKey');
    $result = $rapid->call('APIName', 'FunctionName', [ 
        "ParameterKey1" => "ParameterValue1",
        "ParameterKey2" => "ParameterValue2"
      ]);
  // dd( $col );
  // $countries = Countries::all();
    //dd($countries); 
    return view('auth/register',compact('col'));
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/upload', 'UploadController@uploadBoutiqueForm');
Route::post('/upload', 'UploadController@uploadBoutiqueSubmit');
