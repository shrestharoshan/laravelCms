<div class="left-blog">
    <h4>recent post</h4>
    <div class="recent-post">
        <!-- start single post -->
        @foreach($recentBlogs as $rBlog)
        <div class="recent-single-post">
            {{--<div class="post-img">
                <a href="#">
                    <img src="{{asset('images/blog/1.jpg')}}" alt="">
                </a>
            </div>--}}
            <div class="pst-content">
                <p><a href="#"> {{$rBlog->title}}</a></p>
            </div>
        </div>
        @endforeach
        <!-- End single post -->
    </div>
</div>
