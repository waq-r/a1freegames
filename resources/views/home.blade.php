<?php
$games = cache()->get('games');
$offset = rand(0, (sizeof($games) - 100));
$games = array_slice($games, $offset, 100);
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    	<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
          <style type="text/css">
			  body {
			    background-color: #FFFFFF;
			  }
			  .ui.menu .item img.logo {
			    margin-right: 1.5em;
			  }
			  .main.container {
			    margin-top: 7em;
			  }
			  .wireframe {
			    margin-top: 2em;
			  }
			  .ui.footer.segment {
			    margin: 5em 0em 0em;
			    padding: 5em 0em;
			  }
			  </style>

        <title>A1 Free Games</title>
    </head>
    <body>
  <div class="ui fixed inverted menu">
    <div class="ui container">
      <a href="#" class="header item">
        <img class="logo" src="assets/images/logo.png">
        A1FreeGames
      </a>
      <a href="#" class="item">Home</a>
      <div class="ui simple dropdown item">
        Categories <i class="dropdown icon"></i>
        <div class="menu">
        	@foreach ($categories as $category)
          <a class="item" href=" {{ $category['slug'] }} ">  {{ $category['name']}}  🔸. {{ $category['count'] }} </a>
          <div class="divider"></div>
          @endforeach
        </div>
      </div>
    </div>
  </div>

  <div class="ui main container">


<div class="ui six doubling cards">
	@foreach ($games as $game)
  <div class="ui card">
  <a class="image" href="#">
    <img src="{{ $game['thumbnailUrl'] }}">
  </a>
  <div class="content">
    <a class="header" href="#">{{ $game['title']}}</a>
    <div class="meta">
      <a href="{{ strtolower($game['category']) }}">{{ $game['category']}}</a>
    </div>
  </div>
</div>
  @endforeach
</div>

 </div>

 <div class="ui inverted vertical footer segment">
    <div class="ui center aligned container">
      <div class="ui stackable inverted divided grid">
        <div class="three wide column">
        	@php
        	$halfCategories = round(sizeof($categories) / 2);
        	@endphp
          <h4 class="ui inverted header">Games</h4>
          <div class="ui inverted link list">
            
            @foreach ($categories as $category)
            @if($loop->index >= $halfCategories)
            <a href="{{ $category['slug'] }}" class="item">{{ $category['name'] }}</a>
            @endif
            @endforeach
            </div>
        </div>
        <div class="three wide column">
          <h4 class="ui inverted header">Games</h4>
          <div class="ui inverted link list">
            @foreach ($categories as $category)
            @if($loop->index >= $halfCategories)
            <a href="{{ $category['slug'] }}" class="item">{{ $category['name'] }}</a>
            @endif
            @endforeach
          </div>
        </div>
        <div class="three wide column">
          <h4 class="ui inverted header">Games</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Most played</a>
            <a href="#" class="item">New games</a>
            <a href="#" class="item">Play history</a>
            <a href="#" class="item">Top rated</a>
          </div>
        </div>
        <div class="seven wide column">
          <h4 class="ui inverted header">Bookmark</h4>
          <p>Add A1FreeGames to your bookmarks by pressing CTL+D / CMD+D or using bookmarks menu.</p>
        </div>
      </div>
      <div class="ui inverted section divider"></div>
      <img src="assets/images/logo.png" class="ui centered mini image">
      <div class="ui horizontal inverted small divided link list">
        <a class="item" href="#">Site Map</a>
        <a class="item" href="#">Contact Us</a>
        <a class="item" href="#">Terms and Conditions</a>
        <a class="item" href="#">Privacy Policy</a>
      </div>
    </div>
  </div>
</body>
</html>