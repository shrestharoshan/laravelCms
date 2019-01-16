<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Job;
use Illuminate\Http\Request;

class JobPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::orderBy('postedDate', 'desc')->paginate(7);
        $sn = $jobs->currentPage()*$jobs->count()-$jobs->count()+1;
        return view('admin.pages.listJobs')->with(['jobs' => $jobs, 'sn' => $sn]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.postJob');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
            ['title' => 'required',
                'applicantNo' => 'integer',
                'optStatus' => 'required',
                'description' => 'required|min:5']
        );

        $job = new Job();
        $job->title = $request->title;
        $job->description = $request->description;
        $job->vacancyNo = $request->applicantNo;
        $job->activeUntil = $request->activeDate;
        $job->isActive = $request->optStatus;
        $job->postedDate = date('Y-m-d');
        $job->save();

        session()->flash('Success', 'Job has been added succcessfully');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Job::where('id', '=', $id)->exists()) {
            $job = Job::findOrFail($id);
            return view('admin.pages.editJob')->with('job', $job);
        } else {
            session()->flash('Error', 'The blog doesn\'t exist');
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, ['title'=> 'required']);

        $job = Job::findOrFail($id);
        $job->title = $request->title;
        $job->vacancyNo = $request->applicantNo;
        $job->activeUntil = $request->activeDate;
        $job->isActive = $request->optStatus;
        $job->description = $request->description;

        $job->save();

        session()->flash('Succcess','Job successfully Updated');
        return redirect('listJobs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function delete(Request $request)
    {
        $job = Job::findOrFail($request->id);

        $job->delete();

        session()->flash('Success', 'Job has been deleted succcessfully');

        return json_encode(['Success' => 'Job ' . $job->title . 'Removed Successfully']);
    }
}
