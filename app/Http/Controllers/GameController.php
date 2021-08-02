<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function display($category, $title, $id)
    {
    	$game = [$id, $title, $category];
    	foreach (HomeController::getGamepixGames() as $key => $value) {
       		if($value['id'] === $id){
    			$game = $value;
    			break;
    		}
    	}
    	return view('game', ['game'=>$game, 'categories' => HomeController::createCategoryMenu()]);
    }
}
