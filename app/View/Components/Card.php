<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $game;
    public $gameUrl;
    public $categoryUrl;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($game)
    {
        $this->game = $game;
        $this->gameUrl = route('game', [
            'category'=> $this->stringToUrl($game['category']), 
            'title'=> $this->stringToUrl($game['title']), 
            'id'=> trim($game['id'])
        ]);
        $this->categoryUrl = route('category', [
            'category' => $this->stringToUrl($game['category'])
        ]); 

    }

    public function stringToUrl($text)
    {
        $text = trim($text);
        $text = str_replace(' ', '-', $text);
        $text = preg_replace('/[^A-Za-z0-9\-]/', '', $text);
        $text = strtolower($text);
        return $text;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card');
    }
}
