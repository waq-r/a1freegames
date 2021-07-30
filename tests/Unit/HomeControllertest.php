<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use App\Http\Controllers\GameController;

class HomeControllertest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_getGamepixGames():void
    {
    	$gc = new GameController();
    	$this->assertIsArray($gc->getGamepixGames());
        $this->assertTrue(cache()->has('games'));
    }

    public function test_createCategoryMenu():void
    {
    	$gc = new GameController();
    	$this->assertIsArray($gc->createCategoryMenu());
    }
}
