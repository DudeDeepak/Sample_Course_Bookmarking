<?php

/* Controller for showing the course details */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class HomeController extends Controller
{
  	// index function con consume api and pass course details to home page 
        public function index() {

                $client = new Client(['base_uri' => 'https://api.coursera.org/']);
                $response = $client->request('GET', 'api/courses.v1');
                $body = $response->getBody();
                $content =$body->getContents();
                $arr = json_decode($content,TRUE);

                return view('home', compact('arr'));
        }


}
