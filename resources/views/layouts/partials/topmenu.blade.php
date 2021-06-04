<div class="grid header__topmenu">
    <img class="header__logo" src="{{asset('/img/header/logo.png')}}" srcset="{{asset('/img/header/logo@2x.png')}}">
    <nav class="header__topmenu-list">
        <ul>
            @foreach ($menu as $item)
            <li><a class="header__topmenu-list_link" href="{{$item['link']}}">{{$item['title']}}</a></li>
            @endforeach
        </ul>
    </nav>
</div>