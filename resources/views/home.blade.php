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
@include('navbar')

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

@include('footer')
</body>
</html>