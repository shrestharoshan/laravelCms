<div id="disqus_thread"></div>
<script>

    /**
     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
    /*
     var disqus_config = function () {
     this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
     this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
     };
     */
    (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = 'https://uba-solutions-com.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

{{--
<div class="comment-respond">
    <h3 class="comment-reply-title">Leave a Reply </h3>
    @include('admin.inc.messages')
    <span class="email-notes">Your email address will not be published. Required fields are marked *</span>
    <form action="{{route('blog.store', $blog->id)}}" method="post">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <p>Name *</p>
                <input type="text" name="name" />
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <p>Email *</p>
                <input type="email" name="email"/>
            </div>
           --}}
{{-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <p>Website</p>
                <input type="text" />
            </div>--}}{{--

            <div class="col-lg-12 col-md-12 col-sm-12 comment-form-comment">
                {{ csrf_field() }}
                <p>Comment *</p>
                <textarea id="message-box" cols="30" rows="10" name="comment"></textarea>
                <input type="submit" value="Post Comment" />
            </div>
        </div>
    </form>
</div>
--}}
