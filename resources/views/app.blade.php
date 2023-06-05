<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="author" content="INSPIRO"/>
    <meta name="description" content="Themeforest Template Polo, html template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>{{__('main_title')}}</title>
    <!-- Stylesheets & Fonts -->
    <link href="{{ asset('/css/plugins.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/custom.css') }}" rel="stylesheet">
</head>
<div class="body-inner">
    <header id="header" @if ($isDarkHeader) data-transparent='false' @endif data-fullwidth="true"
            class="@if ($isDarkHeader) dark @endif submenu-light">
        <div class="header-inner">
            <div class="container">
                <div id="logo">
                    <a href="{{route('main')}}">
                        <span class="logo-default">{{__('logo')}}</span>
                        <span class="logo-dark">{{__('logo')}}</span>
                    </a>
                </div>
                <div id="search"><a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i
                            class="icon-x"></i></a>
                    <form class="search-form" action="" method="get">
                        <span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
                    </form>
                </div>
                <div class="header-extras">
                    <ul>
                        <li>
                            <a id="btn-search" href="#"> <i class="icon-search"></i></a>
                        </li>
                        <li>
                            <div class="p-dropdown">
                                <a href="#"><i class="icon-globe"></i>
                                    <span>
                                        @if(session()->get('locale') == 'ru')
                                            RU
                                        @else
                                            EN
                                        @endif
                                    </span>
                                </a>
                                <ul class="p-dropdown-content">
                                    <li><a href="{{ route('changeLang', ['lang' => 'en']) }}">English</a></li>
                                    <li><a href="{{ route('changeLang', ['lang' => 'ru']) }}">Русский</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <div id="mainMenu-trigger">
                    <a class="lines-button x"><span class="lines"></span></a>
                </div>
                <div id="mainMenu">
                    <div class="container">
                        <nav>
                            <ul>
                                <li><a href="{{route('about')}}">{{__('about')}}</a></li>
                                <li><a href="{{route('contact')}}">{{__('contacts')}}</a></li>
                                @auth
                                    <li><a href="{{route('like')}}">{{__('feed')}}</a></li>
                                @endauth
                                <li><a href="{{route('news')}}">{{__('news')}}</a></li>
                                @auth
                                    <li><a href="{{route('account.show')}}">{{__('account')}}</a></li>
                                    <li><a href="{{route('logout')}}">{{__('logout')}}</a></li>
                                    @if(Auth::user()->is_admin)
                                        <li class="dropdown"><a href="#">{{__('admin')}}</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="{{ route('index') }}">{{__('users')}}</a></li>
                                            </ul>
                                        </li>
                                        @endif
                                        {{--                                        <a class="ml-2" href="{{ route('admin.products.delete', ['product' => $product->id]) }}" data-toggle="tooltip" data-original-title="Delete"><i class="icon-trash-2"></i></a>--}}

                                    @endauth
                                    @guest
                                        <li><a href="{{route('login')}}">{{__('login')}}</a></li>
                                        <li><a href="{{route('register')}}">{{__('register')}}</a></li>
                                    @endguest
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @yield('content')
    <footer id="footer">
        <div class="footer-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="widget">
                            <div class="widget-title">{{__('widget-title')}}</div>
                            <p class="mb-5">{{__('with_love')}}</p>
                        </div>
                    </div>
                    <div class="col-lg-7">

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="widget">
                                    <div class="widget-title"><a href="{{route('about')}}" style="font-weight: bold">{{__('about')}}</a></div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="widget">
                                    <div class="widget-title"><a href="{{route('contact')}}" style="font-weight: bold">{{__('contacts')}}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="widget">
                                    <div class="widget-title">@auth<a href="{{route('like')}}" style="font-weight: bold">{{__('feed')}}</a>@endauth</div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="widget">
                                    <div class="widget-title"><a href="{{route('news')}}" style="font-weight: bold">{{__('news')}}</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--Plugins-->
    <script src="{{asset("/js/jquery.js")}}"></script>
    <script src="{{asset("/js/plugins.js")}}"></script>
    <script src="{{asset("/js/functions.js")}}"></script>
    <a id="scrollTop" class="scroll-to"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>

</div>
