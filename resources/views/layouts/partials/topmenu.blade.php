<div class="grid header__topmenu">
<img class="header__logo" src="{{asset('/img/header/LogoE3PL.png')}}"
                srcset="{{asset('/img/header/LogoE3PL@2x.png')}}">
<nav class="header__topmenu-list">
        <ul>
            @foreach ($menu as $item)
            <li><a class="header__topmenu-list_link" href="{{$item['link']}}">{{$item['title']}}</a></li>
            @endforeach
        </ul>
    </nav>
</div>