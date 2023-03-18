@extends('app')
@section('content')
</div>
</body>
</nav>
<div class="body-inner">
    <div class="header-inner">
        <div class="container">
            <div id="logo">
                <a href="index.html">
                </a>
            </div>
            <div id="search"> <a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i class="icon-x"></i></a>
                <form class="search-form" action="search-results-page.html" method="get">
                    <input class="form-control" name="q" type="text" placeholder="Type & Search..." />
                    <span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
                </form>
            </div>
            <!-- end: search -->
            <!--Header Extras-->
            <div class="header-extras">
                <ul>
                    <li>
                        <a id="btn-search" href="#"> <i class="icon-search"></i></a>
                    </li>
                    <li>
                        <div class="p-dropdown">
                            <ul class="p-dropdown-content">
                                <li><a href="#">French</a></li>
                                <li><a href="#">Spanish</a></li>
                                <li><a href="#">English</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div id="mainMenu-trigger">
                <a class="lines-button x"><span class="lines"></span></a>
            </div>
            <div id="mainMenu">
    <section id="page-content">
        <div class="container">
            <div class="page-title">
                <h1 style="text-align: center">Новости</h1>
            </div>
            <div id="blog" class="grid-layout post-1-columns m-b-30" data-item="post-item">
                <!-- Post item-->
                <div class="post-item border">
                    <div class="post-item-wrap">
                        <div class="post-image">
                            <a href="#"> <img alt="" src="{{asset($news[0]->image)}}" style="width: 250px;"> </a> <span class="post-meta-category"><a href="">Lifestyle</a></span> </div>
                        <div class="post-item-description"> <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Запостил: {{$news[0]->created_at}}</span> <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>
                            <h2><a href="#">{{$news[0]->title}} </a></h2>
                            <p>{{$news[0]->content}}</p>
                            <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="post-item border">
                    <div class="post-item-wrap">
                        <div class="post-image">
                            <a href="#"> <img alt="" src="{{asset($news[1]->image)}}" style="width: 700px"> </a> <span class="post-meta-category"><a href="">Science</a></span> </div>
                        <div class="post-item-description"> <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Запостил: {{$news[1]->created_at}}</span> <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>
                            <h2><a href="#">{{$news[1]->title}}</a></h2>
                            <p>{{$news[1]->content}}</p>
                            <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="post-item border">
                    <div class="post-item-wrap">
                        <div class="post-video">
                            <iframe src="{{$news[2]->image}}" width="400" height="580" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            <span class="post-meta-category"><a href="">Video</a></span> </div>
                        <div class="post-item-description"> <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Запостил: {{$news[2]->created_at}}</span> <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>
                            <h2><a href="#">{{$news[2]->title}}</a></h2>
                            <p>{{$news[2]->content}}</p>
                            <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="post-item border">
                    <div class="post-item-wrap">
                        <div class="post-image">
                            <a href="#"> <img alt="" src="{{asset($news[3]->image)}}" style="width: 700px"> </a> <span class="post-meta-category"><a href="">Science</a></span> </div>
                        <div class="post-item-description"> <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Запостил: {{$news[3]->created_at}}</span> <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>
                            <h2><a href="#">{{$news[3]->title}}</a></h2>
                            <p>{{$news[3]->content}}</p>
                            <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
        </div>
        </div>
    </section>
</div>
<a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
            @endsection
<script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>
<script src="js/functions.js"></script>
        </div>
    </div>
</div>
</body>

</html>
