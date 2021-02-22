<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{

	public function homecoba(){
		return view('homecoba');
	}

	public function tentangcoba(){
		return view('tentangcoba');
	}

	public function kontakcoba(){
		return view('kontakcoba');
	}

}