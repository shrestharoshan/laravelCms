<!-- Content Header (Page header) -->
<section class="page-header">
    <h1>
        Job List
    </h1>

</section>
    <div id="categories-table" class="table-responsive">
        <table class="table">
            <tr>
                <th>ID</th>
                <th style="width:19%">Title</th>
                <th style="width: 11%">Vaccancy No</th>
                <th style="width:36%">Description</th>
                <th style="width:12%">Posted At</th>
                <th style="width:12%">Active Until</th>
                <th style="width:8%">Status</th>
                {{-- <th>Updated At</th>--}}
                <th>Edit</th>
                <th>Remove</th>
            </tr>

            @foreach($jobs as $i=>$job)
                <tr>
                    <td>{{$sn++}}</td>
                    <td>{{$job->title}}</td>
                    <td>{{$job->vacancyNo}}</td>
                    <td>{!! substr(strip_tags($job->description),0,100)!!}...</td>
                    <td>{{$job->postedDate}}</td>
                    <td>{{$job->activeUntil}}</td>
                    <td><a>@if($job->isActive && $job->activeUntil > date('Y-m-d')) <span class="btn btn-success" id="{{$job->id}}">{{'Active'}} @else <span class="btn btn-warning" id="{{$job->id}}">{{'Expired'}}@endif</span></a></td>
                    {{-- <td>@if(isset($job->updatedTime)){{$job->updatedTime}} @else {{'N/A'}}@endif </td>--}}
                    <td><a  href="{{ route('job.edit',$job->id) }}"><span
                                class="btn btn-success">Edit</span></a></td>
                    <td><a data-js="open-remove"><span class="btn btn-danger" id="{{$job->id}}" url="/deleteJob">Remove</span></a></td>
                </tr>
            @endforeach
        </table>

    </div>
    <div style="text-align: center; margin-left: 400px;">
        {!! $jobs->links() !!}
    </div>
