{{--<div class="comments-area">
    <div class="comments-heading">
        <h3>{{$blog->comments_count}} comments</h3>
    </div>
    <div class="comments-list">
        <ul>
            @foreach($comments as $comment)
            <li>
                <div class="comments-details">
                    <div class="comments-list-img">
                        <img src="{{asset('images/blog/b02.jpg')}}" alt="post-author">
                    </div>
                    <div class="comments-content-wrap">
                            <span>
																<b><a href="#">website if present</a></b>
																{{$comment->name}}
																<span class="post-time"> {{date('M d, Y', strtotime($comment->postedDate))}}</span>
                           --}}{{-- <a href="#">Reply</a>--}}{{--
                            </span>
                        <p>{{$comment->content}}</p>
                    </div>
                </div>
            </li>
            @endforeach
           --}}{{-- <li>
                <div class="comments-details">
                    <div class="comments-list-img">
                        <img src="{{asset('images/blog/b02.jpg')}}" alt="post-author">
                    </div>
                    <div class="comments-content-wrap">
                            <span>
																<b><a href="#">admin</a></b>
																Post author
																<span class="post-time">October 6, 2014 at 6:18 pm </span>
                            <a href="#">Reply</a>
                            </span>
                        <p>Quisque orci nibh, porta vitae sagittis sit amet, vehicula vel mauris. Aenean at justo dolor. Fusce ac sapien bibendum, scelerisque libero nec</p>
                    </div>
                </div>
            </li>--}}{{--

        </ul>
    </div>
</div>--}}
