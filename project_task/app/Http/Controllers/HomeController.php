<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function index(){
       return view('index');
    }
    
    public function search(Request $request ){
        header('AMP-Access-Control-Allow-Source-Origin: http://localhost');
	$response = array('name' => 's');
        return json_encode($response);
    }
    
    //
}
