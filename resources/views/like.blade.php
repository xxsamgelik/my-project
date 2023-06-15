@extends('app')
@section('content')
    <section id="page-content" class="sidebar-right">
        <div class="container-fluid">
            <!-- post content -->
            <!-- Page title -->
            <!-- end: Page title -->
            <!-- Blog -->
            <form action="" method="GET">
                <input type="text" name="query" placeholder="Поиск по пользователям">
                <button type="submit">Поиск</button>
            </form>
            <div id="blog" class="grid-layout post-5-columns m-b-30" data-item="post-item" data-stagger="10">
                <!-- Post item-->

                @for($i = 0; $i < count($users); $i++)
                    <div class="post-item border">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <a href="#">
                                    <img alt="" src="{{$users[$i]->image}}">
                                </a>
                                <span class="post-meta-category"><a href="">Lifestyle</a></span>
                            </div>
                            <div class="post-item-description">
                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>
                    {{$users[$i]->created_at->format("d M H:i")}}
                </span>
                                <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>
                                <h2><a href="#">{{$users[$i]->name}}
                                    </a></h2>
                                <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo
                                    dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
                                <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end: Post item-->
                @endfor

            <!-- end: Blog -->
            <!-- Pagination --><!-- end: Pagination -->
        </div>

            <!-- end: post content -->
    </section> <!-- end: Content -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
    <!--Plugins-->
    <script src="{{asset("/js/jquery.js")}}"></script>
    <script src="{{asset("/js/plugins.js")}}"></script>

    <!--Template functions-->
    <script src="{{asset("/js/functions.js")}}"></script>
@endsection

