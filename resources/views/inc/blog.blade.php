<div class="blog-inner area-padding">
    <div class="blog-overly"></div>
    <div class="container ">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h2>Latest News</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Start Left Blog -->
            @foreach($blogs as $blog)
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="single-blog">
                    {{--<div class="single-blog-img">
                        <a href="blog.html">
                            <img src="{{asset('images/blog/1.jpg')}}" alt="">
                        </a>
                    </div>--}}
                    <div class="blog-meta">
                <span class="comments-type">
										<i class="fa fa-comment-o"></i>
                                         <a href="{{route('blogs.details',$blog->id)}}#disqus_thread">Link</a>
									</span>
                        <span class="date-type">
										<i class="fa fa-calendar"></i>{{$blog->createdTime}}
									</span>
                    </div>
                    <div class="blog-text">
                        <h4>
                            <a href="blog.html">{{$blog->title}}</a>
                        </h4>
                        <p>
                           {!! substr(strip_tags($blog->content), 0, 100) !!}
                        </p>
                    </div>
                    <span>
									<a href="{{route('blogs.details',$blog->id)}}" class="ready-btn">Read more</a>
								</span>
                </div>
                <!-- Start single blog -->
            </div>
            @endforeach
            <!-- End Left Blog-->
            <!-- Start Left Blog -->
           {{-- <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="single-blog">
                    <div class="single-blog-img">
                        <a href="blog.html">
                            <img src="{{asset('images/blog/2.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="blog-meta">
                <span class="comments-type">
										<i class="fa fa-comment-o"></i>
										<a href="#">130 comments</a>
									</span>
                        <span class="date-type">
										<i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
									</span>
                    </div>
                    <div class="blog-text">
                        <h4>
                            <a href="blog.html">Explicabo magnam quibusdam.</a>
                        </h4>
                        <p>
                            Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit
                            explicabo nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum veniam
                            optio modi sit explicabo nisi magnam quibusdam.
                        </p>
                    </div>
                    <span>
									<a href="blog.html" class="ready-btn">Read more</a>
								</span>
                </div>
                <!-- Start single blog -->
            </div>
            <!-- End Left Blog-->
            <!-- Start Right Blog-->
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="single-blog">
                    <div class="single-blog-img">
                        <a href="blog.html">
                            <img src="{{asset('images/blog/3.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="blog-meta">
                <span class="comments-type">
										<i class="fa fa-comment-o"></i>
										<a href="#">10 comments</a>
									</span>
                        <span class="date-type">
										<i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
									</span>
                    </div>
                    <div class="blog-text">
                        <h4>
                            <a href="blog.html">Lorem ipsum dolor sit amet</a>
                        </h4>
                        <p>
                            Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit
                            explicabo nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum veniam
                            optio modi sit explicabo nisi magnam quibusdam.
                        </p>
                    </div>
                    <span>
									<a href="blog.html" class="ready-btn">Read more</a>
								</span>
                </div>
            </div>--}}
            <!-- End Right Blog-->
        </div>
    </div>
</div>
