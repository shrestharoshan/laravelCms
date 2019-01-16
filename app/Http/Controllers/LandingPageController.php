<?php

namespace App\Http\Controllers;

use App\Job;
use App\Post;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    /**
     * get all the contents to be shown in the landing page
     */
    public function getPageContents()
    {
        $jobs = Job::where('isActive', '=', 1)->where('activeUntil', '>', date('Y-m-d'))->orderBy('postedDate')->get();
        //$blogs = Post::withCount('comments')->orderBy('createdTime')->get();
        $blogs = Post::withCount('comments')->get();

        return view('layouts.index')->with('jobs', $jobs)->with('blogs', $blogs);
    }
}
