<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
                <h2>Carrer</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="faq-details">
                <div class="panel-group" id="accordion">
                    <!-- Panel Default -->
                    @foreach($jobs as $i=>$job)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="check-title">
                                <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#check{{$i+1}}" aria-expanded="false">
                                    <span class="acc-icons"></span>{{$job->title}}solutions
                                </a>
                            </h4>
                        </div>
                        <div id="check{{$i+1}}" class="panel-collapse collapse" aria-expanded="false">
                            <div class="panel-body">
                                <p>
                                    {!! $job->description !!}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- End Panel Default -->
                </div>
            </div>
        </div>
        {{--<div class="col-md-6 col-sm-6 col-xs-12">
            <div class="tab-menu">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active">
                        <a href="#p-view-1" role="tab" data-toggle="tab">Project</a>
                    </li>
                    <li>
                        <a href="#p-view-2" role="tab" data-toggle="tab">Planning</a>
                    </li>
                    <li>
                        <a href="#p-view-3" role="tab" data-toggle="tab">Success</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane active" id="p-view-1">
                    <div class="tab-inner">
                        <div class="event-content head-team">
                            <h4>Project</h4>
                            <p>
                                Redug Lares dolor sit amet, consectetur adipisicing elit. Animi vero excepturi magnam ducimus adipisci voluptas, praesentium maxime necessitatibus in dolor dolores unde ab, libero quo. Aut, laborum sequi.
                            </p>
                            <p>
                                voluptas, praesentium maxime cum fugiat,magnam ducimus adipisci voluptas, praesentium architecto ducimus, doloribus fuga itaque omnis placeat.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="p-view-2">
                    <div class="tab-inner">
                        <div class="event-content head-team">
                            <h4>Planning</h4>
                            <p>
                                voluptas, praesentium maxime cum fugiat,magnam ducimus adipisci voluptas, praesentium architecto ducimus, doloribus fuga itaque omnis.
                            </p>
                            <p>
                                Redug Lares dolor sit amet, consectetur adipisicing elit. Animi vero excepturi magnam ducimus adipisci voluptas, praesentium maxime necessitatibus in dolor dolores unde ab, libero quo. Aut.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="p-view-3">
                    <div class="tab-inner">
                        <div class="event-content head-team">
                            <h4>Success</h4>
                            <p>
                                voluptas, praesentium maxime cum fugiat,magnam ducimus adipisci voluptas, praesentium architecto ducimus, doloribus fuga itaque omnis placeat.
                            </p>
                            <p>
                                voluptas, praesentium maxime cum fugiat,magnam ducimus adipisci voluptas, praesentium architecto ducimus, doloribus fuga itaque omnis.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>--}}
    </div>
    <!-- end Row -->
</div>
