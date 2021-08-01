<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\View\Components\Card;


class CardTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_stringToUrl()
    {
    	$game = ['title'=>'Jump with Justin',
    			'category'=> 'Arcade',
    			'id'=>'945P0'
    			];
    	$card = new Card($game);
        $this->assertSame('jump-with-justin', $card->stringToUrl($game['title']));
        $this->assertSame('hello-world', $card->stringToUrl(' Hello @World!'));
    }
}
