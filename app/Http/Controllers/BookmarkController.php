<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bookmark;

class BookmarkController extends Controller
{

	//This function passes the stored bookmark to the bookmark page
	public function index() {
                $bookmarks = Bookmark::all();
                $bookmarks = json_decode(json_encode($bookmarks), true);
                return view('bookmark')->with('bookmarks', $bookmarks);

        }

}
