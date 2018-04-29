<?php

/* Controller for showing the course details */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Bookmark;

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

	// Function to insert the course data into bookmarks table
        // and pass the response to ajax call from view  in json format
	public function actionInsert(Request $request) {

                // $someInput = $request->all();

                try {

                $this->validate($request, array(
                        'course_id' => 'required',
                        'course_name' => 'required',
                        'course_type' => 'required',
                        ));

                $bookmark = new Bookmark();

                $bookmark->course_id = $request->input('course_id');
                $bookmark->course_name = $request->input('course_name');
                $bookmark->course_type = $request->input('course_type');

                $sample_array = $bookmark->where('course_id', $request->input('course_id'))->get()->toArray();

                if(!empty($sample_array))
                        $response_array['msg'] = 'already-exist';
                else {
                        $bookmark->save();
                        $response_array['msg'] = 'success';
                     }

                } catch(\Exception $e) {
                        $response_array['msg'] = 'error';
                        header('Content-type: application/json');
                        echo json_encode($response_array);
                }

                header('Content-type: application/json');
                echo json_encode($response_array);

	}

}
