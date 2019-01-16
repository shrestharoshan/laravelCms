<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;
use Carbon\Carbon;

/**
 * Class BlogController
 * @package App\Http\Controllers
 */
class BlogController extends Controller
{
    public function index()
    {
        return view('layouts.blog');
    }

    public function getBlogList($month, $year)
    {
        $posts = Post::latest('createdTime');
        if ($month) {
            $posts->whereMonth('createdTime', Carbon::parse($month)->month);
        }
        if ($year) {
            $posts->whereYear('createdTime', $year);
        }

        $posts = $posts->get();

        $recentBlogs = $this->getRecentBlogs();
        $archives = $this->getArchives();

        return view('layouts.bloglist')
            ->with('blogs', $posts)
            ->with('recentBlogs', $recentBlogs)
            ->with('archive', $archives);
    }

    public function getRecentBlogs()
    {

        //recent blogs
        $recentBlogs = Post::orderBy('createdTime', 'desc')->limit(4)->get();
        return $recentBlogs;
    }

    public function getArchives()
    {
        //archive
        $archives = Post::selectRaw('year(createdTime) year, monthname(createdTime) month, count(*) published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(createdTime) desc')
            ->get()->toArray();
        return $archives;
    }

    public function details($id)
    {

        $recentBlogs = $this->getRecentBlogs();
        $archives = $this->getArchives();

        if (Post::where('id', '=', $id)->exists()) {
            $author = Post::findOrFail($id)->author;
            $blog = Post::withCount('comments')->findOrFail($id);
            $comments = Comment::where('postId', '=', $id)->get();

            return view('layouts.blog')
                ->with('blog', $blog)
                ->with('recentBlogs', $recentBlogs)
                ->with('author', $author)
                ->with('comments', $comments)
                ->with('archive', $archives);
        } else {
            session()->flash('Error', 'The blog doesn\'t exist');
            return redirect()->back();
        }
    }

    public function store(Request $request, $postId)
    {
        $this->validate($request, array(
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'comment' => 'required|min:5|max:2000'
        ));

        $comment = new Comment();
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->content = $request->comment;
        $comment->isApproved = 1;
        $comment->postedDate = date('Y-m-d');
        $comment->webSite = '';
        $comment->postId = $postId;
        $comment->authorId = 0;
        $comment->save();

        session()->flash('Success', 'Comment was added');
        return redirect()->back();
    }
}
