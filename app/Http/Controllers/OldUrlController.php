<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;


class OldUrlController extends Controller
{
    public function newUrl($qs){
    	parse_str(request()->getQueryString(), $qString);

    	if(!isset($qString['id'])){
    		return redirect('/');
    	}
    	
    		$game = null;
	    	foreach (HomeController::getGamepixGames() as $key => $value) {
       		if($value['id'] === $qString['id']){
    			$game = $value;
    			break;
    		}
    	}
    	if($game === null){
    		return abort(404);
    	}

    	$newUrl =Str::slug($game['category']).'/'.Str::slug($game['title']).'_'.$game['id'];
	return redirect($newUrl, 301);   
	 }

}
