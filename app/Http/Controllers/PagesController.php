<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about(){
		$name = '<span style="color: red;">Robert Schlick</span>';
		return view('pages.about')->with([
			'name' => $name,
			'age' => 25
		]);
	}
}
