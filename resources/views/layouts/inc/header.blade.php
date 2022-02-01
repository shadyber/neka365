
<header class="header">
    <div class="header-fixed">
        <div class="container-fluid pl-120 pr-120 position-relative">
            <div class="row d-flex align-items-center">
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="logo">
                        <a href="#"><img src="/assets/images/logo.png" alt="" class="img-fluid"></a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-6 d-flex justify-content-end position-static">
                    <div class="nav-menu-cover">
                        <ul class="nav nav-menu">
                            <li><a href="/l">Home</a></li>
                            <li><a href="/about">About</a></li>
                            <li class="menu-item-has-children">
                                <a href="/blog">{{__('Articles')}}</a>
                                <div class="sub-nav">
                                    <ul class="sub-menu">
                                        <li><a href="/blog">{{__('All Articles')}}</a></li>
                                        @foreach(\App\Models\BlogCategory::allCategories() as $category)
                                            <li><a href="/category/{{$category->slug}}">{{$category->title}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </li>



                            <li class="menu-item-has-children">
                                <a href="/video">{{__('Videos')}}</a>
                                <div class="sub-nav">
                                    <ul class="sub-menu">
                                        <li><a href="/blog">{{__('All Articles')}}</a></li>
                                        @foreach(\App\Models\BlogCategory::allCategories() as $category)
                                            <li><a href="/category/{{$category->slug}}">{{$category->title}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </li>

                            <li><a href="/contact">{{__('Contact')}}</a></li>


                            @auth

                                <li class="menu-item-has-children">

                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="/home" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <img src="{{ Auth::user()->photo? Auth::user()->photo : '/images/avatar.png' }}" alt="" width="32">
                                    </a>

                                    <div class="sub-nav">
                                        <ul class="sub-menu">
                                            <a class="dropdown-item" href="/home">
                                                {{ __('Profile') }}
                                            </a>



                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </ul>
                                    </div>
                                </li>

                            @endauth
                            @guest
                                <a href="/register"> {{__('Join')}}</a>
                            @endguest

                            <li class="menu-item-has-children">


                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                    <span class="flag-icon flag-icon-{{Config::get('languages')[App::getLocale()]['flag-icon']}}"></span>
                                    {{ Config::get('languages')[App::getLocale()]['display'] }}

                                </a>
                                <div class="sub-nav">
                                    <ul class="sub-menu">
                                        @foreach (Config::get('languages') as $lang => $language)

                                            @if ($lang != App::getLocale())

                                                <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}">
                                                    <span class="flag-icon flag-icon-{{$language['flag-icon']}}"></span>
                                                    {{$language['display']}}
                                                </a>

                                            @endif

                                        @endforeach
                                    </ul>
                                </div>
                            </li>



                        </ul>
                    </div>
                    <div class="mobile-menu-cover">
                        <ul class="nav mobile-nav-menu">
                            <li class="search-toggle-open"> <img src="/assets/images/search-icon.svg" alt="" class="img-fluid svg"> </li>
                            <li class="search-toggle-close hide"> <img src="/assets/images/close.svg" alt="" class="img-fluid"> </li>
                            <li class="nav-menu-toggle"> <img src="/assets/images/menu-toggler.svg" alt="" class="img-fluid svg"> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
