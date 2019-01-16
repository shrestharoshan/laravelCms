<section class="page-header">
    <h1>
        Edit Job
    </h1>

</section>
<form action="{{ route("job.update", $job->id ) }}" method="POST" class="job-post">
    <label class="control-label col-sm-3" label for="title">Title</label>
    <div class="col-auto">
        <input type="text" name="title" placeholder="Title of the post" style="min-width: 100%" value="{{$job->title}}">
    </div>
    <label class="control-label col-sm-2" label for="title">Vacancy Number</label>
    <div class="col-auto">
        <input type="text" name="applicantNo" placeholder="Number of applicants" style="min-width: 100%"
               value="{{$job->vacancyNo}}">
    </div>
    <label class="control-label col-sm-2" label for="title">Active Until</label>
    <div class="col-auto">
        <input type="text" name="activeDate" placeholder="Active Until" style="min-width: 100%"
               value="{{$job->activeUntil}}">
    </div>
    <label class="control-label col-sm-2" label for="status">Status</label>
    <div class="col-auto">
        <label class="radio-inline"><input type="radio" name="optStatus"
                                           @if($job->isActive && $job->activeUntil > date('Y-m-d')) checked
                                           @endif  value="1">Active</label>
        <label class="radio-inline"><input type="radio" name="optStatus"
                                           @if(!$job->isActive || $job->activeUntil < date('Y-m-d')) checked
                                           @endif value="0">InActive</label>
    </div>
    <label class="control-label col-sm-2" label for="descriptoin">Description</label>
    <div class="col-auto">
        <textarea name="description" placeholder="Details for the post" style="min-width: 100%" rows="7"
                  id="summary-ckeditor">{{$job->description}}</textarea>
    </div>
    <div class="col-sm-offset-2 col-sm-10 mt-2">
        {{ csrf_field() }}

        <input type="submit" name="AddJob" value="Update Job Post" class="btn-primary">

    </div>
</form>
<script>
    CKEDITOR.replace('summary-ckeditor');
</script>
