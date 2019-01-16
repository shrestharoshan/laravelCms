<section class="page-header">
    <h1>
        Edit Job
    </h1>

</section>

<form action="{{ route("blog.update", $blog->id) }}" method="POST" class="job-post">
    <label class="control-label col-sm-2" label for="title">Title</label>
    <div class="col-auto">
        <input type="text" name="title" placeholder="Title of the post" style="min-width: 100%"
               value="{{$blog->title}}">
    </div>
    <label class="control-label col-sm-2" label for="descriptoin">Description</label>
    <div class="col-auto">
        <textarea name="description" placeholder="Details for the post" style="min-width: 100%" rows="7"
                  id="summary-ckeditor">{{$blog->content}}</textarea>
    </div>
    <div class="col-sm-offset-2 col-sm-10 mt-2">
        {{ csrf_field() }}
        <input type="submit" name="AddPost" value="Update Post" class="btn-primary">
    </div>
</form>


<script>
    CKEDITOR.replace('summary-ckeditor');
</script>
