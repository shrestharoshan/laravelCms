
<div class="left-blog">
    <h4>archive</h4>
    <ul>
        @foreach($archive as $post)
        <li>
            <a href="{{route('blogs.list', ['month' => $post['month'], 'year' => $post['year']])}}">{{$post['month'] .' '. $post['year']}}</a>
        </li>
        @endforeach
    </ul>
</div>
