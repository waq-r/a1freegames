<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use App\Http\Controllers\HomeController;

class HomeControllerTest extends TestCase
{
	/**
	 * Description
	 * @return void
	 */
    public function test_namedRouteUrl()
    {
    	$this->assertSame('http://a1freegames.test', route('home') );
    }
    
    /**
     * Description
     * @return void
     */
    public function test_getGamepixGames()
    {
    	$gc = new HomeController();
    	$this->assertIsArray($gc->getGamepixGames());
        $this->assertTrue(cache()->has('games'));
    }

    /**
     * Description
     * @return void
     */
    public function test_createCategoryMenu():void
    {
    	$gc = new HomeController();
    	$this->assertIsArray($gc->createCategoryMenu());
    }
}
