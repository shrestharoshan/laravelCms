<section class="page-header">
    <h1>
        Post Job
    </h1>

</section>
<form action="{{ route("job.store") }}" method="POST" class="job-post">
    <label class="control-label col-sm-2" label for="title">Title</label>
    <div class="col-auto">
        <input type="text" name="title" placeholder="Title of the post" style="min-width: 100%" value="{{old('title')}}">
    </div>
    <label class="control-label col-sm-2" label for="title">Vacancy Number</label>
    <div class="col-auto">
        <input type="text" name="applicantNo" placeholder="Number of applicants" style="min-width: 100%" value="{{old('applicantNo')}}">
    </div>
    <label class="control-label col-sm-2" label for="title">Active Until</label>
    <div class="col-auto">
        <input type="text" name="activeDate" placeholder="Active Until" style="min-width: 100%" id="datepicker" autocomplete="off" value="{{old('activeDate')}}">
    </div>
    <label class="control-label col-sm-2" label for="status">Status</label>
    <div class="col-auto">
        <label class="radio-inline"><input type="radio" name="optStatus" value="1" @if(old('optStatus')) checked @endif>Active</label>
        <label class="radio-inline"><input type="radio" name="optStatus" value="0" @if(!old('optStatus')) checked @endif>InActive</label>
    </div>

    <label class="control-label col-sm-2" label for="descriptoin">Description</label>
    <div class="col-auto">
        <textarea name="description" placeholder="Details for the post" style="min-width: 100%" rows="7"
                  id="summary-ckeditor"></textarea>
    </div>
    <div class="col-sm-offset-2 col-sm-10 mt-2">
        {{ csrf_field() }}
        <input type="submit" name="AddPost" value="Add Post" class="btn-primary">
        <input type="button" name="Cancel" value="Cancel" class="btn-primary">
    </div>
</form>


<script>
    CKEDITOR.replace('summary-ckeditor');
    $(document).ready(function() {
        $('#datepicker').datepicker({ format: 'yyyy-mm-dd' });
    });

</script>
