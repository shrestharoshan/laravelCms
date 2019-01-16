<div class="col-md-12 col-sm-12 col-xs-12">
    @foreach($blogs as $blog)
    <div class="single-blog">
        <div class="single-blog-img">
            <a href="blog-details.html">
                <img src="img/blog/1.jpg" alt="">
            </a>
        </div>

        <div class="blog-meta">
                  <span class="comments-type">
											<i class="fa fa-comment-o"></i>
                                             <a href="{{route('blogs.details',$blog->id)}}#disqus_thread">Link</a>
											{{--<a href="#">11 comments</a>--}}
										</span>
            <span class="date-type">
											<i class="fa fa-calendar"></i>{{$blog->createdTime}}
										</span>
        </div>
        <div class="blog-text">
            <h4>
                <a href="#">{{$blog->title}}</a>
            </h4>
            <p>
                {!! substr(strip_tags($blog->content), 0, 100) !!}
            </p>
        </div>
        <span><a href="{{route('blogs.details', $blog->id)}}" class="ready-btn">Read more</a></span>
    </div>
    @endforeach
</div>
