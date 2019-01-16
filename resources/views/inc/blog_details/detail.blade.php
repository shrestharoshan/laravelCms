<article class="blog-post-wrapper">
    <div class="post-thumbnail">
        <img src="{{asset('images/blog/6.jpg')}}" alt="" />
    </div>
    <div class="post-information">
        <h2>{{$blog->title}}</h2>
        <div class="entry-meta">
            <span class="author-meta"><i class="fa fa-user"></i> <a href="#">{{$author->fname}}</a></span>
            <span><i class="fa fa-clock-o"></i> {{date('M d, Y', strtotime($blog->createdTime))}}</span>
           {{-- <span class="tag-meta">
												<i class="fa fa-folder-o"></i>
												<a href="#">painting</a>,
												<a href="#">work</a>
											</span>--}}
          {{--  <span>
												<i class="fa fa-tags"></i>
												<a href="#">tools</a>,
												<a href="#"> Humer</a>,
												<a href="#">House</a>
											</span>--}}
            <span><i class="fa fa-comments-o"></i>  <a href="{{route('blogs.details',$blog->id)}}#disqus_thread">Link</a></span>
        </div>
        <div class="entry-content">
           {!! $blog->content !!}
        </div>
    </div>
</article>
