<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function display($category){
    	if($this->categoryExists($category) === false){
    		abort(404);
    	}

    	$games = $this->getCategoryGames($category);


    	return view('category', ['games'=> $games, 'categories' => cache('categories')]);

    }

    public function categoryExists($category):bool
    {
    	return array_key_exists($category, cache('categories'));

    }

    public function getCategoryGames($category):array 
    {
    	$categoryGames = [];
    	foreach (HomeController::getGamepixGames() as $key => $value) {
    		if(strtolower($value['category']) === $category){
    			$categoryGames[] = $value;
    		}
    	}
    	return $categoryGames;
    }
}
