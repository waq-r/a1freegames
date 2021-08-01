<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;


class CategoryController extends Controller
{
    public function display($category){
    	if($this->categoryExists($category) === false){
    		abort(404);
    	}

    	$games = $this->getCategoryGames($category);


    	return view('category', ['games'=> $games, 'categories' => HomeController::createCategoryMenu()]);

    }

    public function categoryExists($category):bool
    {
    	return array_key_exists($category, HomeController::createCategoryMenu());

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
