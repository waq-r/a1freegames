
	<div class="ui card">
	  <a class="image" href="{{ $gameUrl }}">
	    <img src="{{ $game['thumbnailUrl'] }}">
	  </a>
	  <div class="content">
	    <a class="header" href="{{ $gameUrl }}">{{ $game['title'] }}</a>
	    <div class="meta">
	      <a href="{{ strtolower($game['category']) }}">{{ $game['category'] }}</a>
	    </div>
	  </div>
	</div>

