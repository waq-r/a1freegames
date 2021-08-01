<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

/**
 * 
 */
class HomeController extends Controller
{
	public function display(){
		$this->getGamepixGames();

		return view('home', ['categories'=>$this->createCategoryMenu()]);

	}
/**
 * Create Multi-dimentional array of unique categories from games data array.
 * Each category array contains it's name, slug and count (number of games).
 * @return Array
 */
    public function createCategoryMenu():array 
    {
    	return cache()->remember('categories', now()->addDays(1), function(){

    		$category = [];
	    	foreach (cache()->get('games') as $k => $v) {
	    		$slug = Str::slug($v['category'], '-');

	    		if(!isset($category[$slug])){
	    			$category[$slug] = [
                        'name' => $v['category'],
                        'slug' => $slug,
                        'url' => route('category', ['category' => $slug]),
                        'count' => 1];
	    		}

	    		$category[$slug]['count']++;

	        	}

    	return $category;
    	});
    	
    }

    /**
     * Get games data and store array in cache for a day.
     * @return Array
     */
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
