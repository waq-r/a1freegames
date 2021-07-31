<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use App\Http\Controllers\HomeController;

class HomeControllertest extends TestCase
{
    public function test_namedRouteUrl():void
    {
    	$this->assertSame('/board', route('category', ['category'=>'board']) );
    }
    public function test_getGamepixGames():void
    {
    	$gc = new HomeController();
    	$this->assertIsArray($gc->getGamepixGames());
        $this->assertTrue(cache()->has('games'));
    }

    public function test_createCategoryMenu():void
    {
    	$gc = new HomeController();
    	$this->assertIsArray($gc->createCategoryMenu());
    }
}
