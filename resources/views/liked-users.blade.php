@extends('app')
@section('content')
    <section id="page-content" class="sidebar-right">
    <div id="blog" class="grid-layout post-5-columns m-b-30" data-item="post-item" data-stagger="10">

    @foreach($likedUsers as $like)
        <div class="post-item border">
            <div class="post-item-wrap">
                <div class="post-image">
                    <a href="#">
                        <img alt="" src="{{$like->likedUser->image}}">
                    </a>
                    <span class="post-meta-category"><a href="">Lifestyle</a></span>
                </div>
                <div class="post-item-description">
                    <span class="post-meta-date"><i class="fa fa-calendar-o"></i>
                        {{$like->likedUser->created_at->format("d M H:i")}}
                    </span>
                    <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>
                    <h2><a href="#">{{$like->likedUser->name}}</a></h2>
                    <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo
                        dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
                    <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                </div>
            </div>
        </div>
        <!-- end: Post item-->
    @endforeach
    </div>
    {!! $likedUsers->links() !!}
    </section>
@endsection
