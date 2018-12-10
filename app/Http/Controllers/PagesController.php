<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
        public function index(){
    	$title = 'welcome!';
    	// return view('pages.index', compact('title'));
    	return view('pages.index')->with('big',$title);
    }
    public function about(){
    	return view('pages.about');
    }
    public function services(){
    	$data = array(
    		'title'=>'Services',
    		'services'=>['a','b','c']
    	);
    	return view('pages.services')->with($data);
    }
}
