<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function display(){
		$this->getGamepixGames();

		return view('home', ['categories'=>$this->createCategoryMenu()]);

	}

    public function createCategoryMenu():array 
    {
    	return cache()->remember('categories', now()->addDays(1), function(){

    		$category = [];
	    	foreach (cache()->get('games') as $k => $v) {
	    		$slug = strtolower($v['category']);
	    		$slug = str_replace(' ', '-', $slug);

	    		if(!isset($category[$slug])){
	    			$category[$slug] = ['name'=>$v['category'], 'slug'=>$slug, 'count'=>1];
	    		}

	    		$category[$slug]['count']++;

	        	}

    	return $category;
    	});
    	
    }
    public function getGamepixGames():array
    {
    	$path = 'https://games.gamepix.com/games?sid=23R22';

    	return cache()->remember('games', now()->addDays(1), function() use($path){ 
    		$response = json_decode(file_get_contents($path), true);

	    		if(isset($response['status']) && $response['code'] === 200){
	    			$games = $response['data'];
	    		}
	    		else{ 
	    			die('Fetch games failed');
	    		}

    		return $games;
    }
   		
    		);
}

}
