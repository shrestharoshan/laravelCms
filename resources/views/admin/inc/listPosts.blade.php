<!-- Content Header (Page header) -->
<section class="page-header">
    <h1>
       Blog List
    </h1>

</section>

<div id="categories-table" class="table-responsive">
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Description</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Edit</th>
            <th>Remove</th>
        </tr>
        @foreach($posts as $i=>$post)
            <tr>
                <td>{{$i+1}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->authorId}}</td>
                <td>{!! substr($post->content,0,140)!!}</td>
                <td>{{$post->createdTime}}</td>
                <td>@if(isset($post->updatedTime)){{$post->updatedTime}} @else {{'N/A'}}@endif </td>
                <td><a data-js="open-edit" href="{{ route('blog.show',$post->id) }}"><span
                            class="btn btn-warning">Edit</span></a></td>
                <td><a data-js="open-remove"><span class="btn btn-danger" id="{{$post->id}}" url="/deletePost">Remove</span></a>
            </tr>
        @endforeach
    </table>
</div>

