<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;

class LinkController extends Controller
{
    public function getHome($string) {
    	$link = Link::where('hash', $string)->first();
    	return view('home.index', compact('link'));
    }

    public function addLink() {
    	$links = Link::paginate(5);
    	return view('home.add', compact('links'));
    }

    public function postaddLink(Request $request) {
        if ($request->password != '0909274128') {
            return redirect()->back()->withInput()->with('warning_mesage','Security Password is wrong.');
        }

    	$link = new Link();

    	$link->hash = $this->rand_string(8);
    	$link->name = $request->name;
    	$link->img = $request->img;
    	$link->link = $request->link;
    	$link->save();

    	return redirect(route('add'))->with('success_mesage','Add successfully.');
    }


    private function rand_string( $length ) {
		$str = "";
		$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
		$size = strlen( $chars );
		for( $i = 0; $i < $length; $i++ ) {
			$str .= $chars[ rand( 0, $size - 1 ) ];
 		}
	return $str;
}
}
