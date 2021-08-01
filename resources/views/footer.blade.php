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
            <a href="{{ $category['url'] }}" class="item">{{ $category['name'] }}</a>
            @endif
            @endforeach
            </div>
        </div>
        <div class="three wide column">
          <h4 class="ui inverted header">Games</h4>
          <div class="ui inverted link list">
            @foreach ($categories as $category)
            @if($loop->index >= $halfCategories)
            <a href="{{ $category['url'] }}" class="item">{{ $category['name'] }}</a>
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
      <img src="{{ url('/') }}/img/A1FreeGamesBlack.png" class="ui centered mini image">
      <div class="ui horizontal inverted small divided link list">
        <a class="item" href="#">Site Map</a>
        <a class="item" href="#">Contact Us</a>
        <a class="item" href="#">Terms and Conditions</a>
        <a class="item" href="#">Privacy Policy</a>
      </div>
    </div>
  </div>