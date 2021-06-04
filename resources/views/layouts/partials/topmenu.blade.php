<div class="header__topmenu">
            <img class="header__logo" src="img/header/logo.png"
                srcset="img/header/logo@2x.png 2x,img/header/logo@3x.png 3x">
            <nav class="header__topmenu-list">
                <ul>
                @foreach ($menu as $item)
                    <li><a class="header__topmenu-list_link" href="{{$item['link']}}">{{$item['title']}}</a></li>                    
                @endforeach
                </ul>
            </nav>
        </div>