  <div class="ui fixed inverted menu">
    <div class="ui container">
      <a href="{{ url('/') }}" class="header item">
        <img class="logo" src="{{ url('/') }}/img/A1FreeGamesBlack.png">
        A1FreeGames
      </a>
      <a href="{{ url('/') }}" class="item">Home</a>
      <div class="ui simple dropdown item">
        Categories <i class="dropdown icon"></i>
        <div class="menu">
        	@foreach ($categories as $category)
          <a class="item" href=" {{ $category['url'] }} ">  {{ $category['name']}}  🔸. {{ $category['count'] }} </a>
          <div class="divider"></div>
          @endforeach
        </div>
      </div>
    </div>
  </div>