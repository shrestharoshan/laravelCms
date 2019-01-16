<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function __construct()
    {
        ///$this->middleware("auth:admin");
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('createdTime', 'desc')->get();
        return view('admin.pages.manageBlogs')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.postBlogs');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,
            ['title' => 'required',
                'description' => 'required|min:5']
        );

        $blog = new Post();
        $blog->title = $request->title;
        $blog->content = $request->description;
        $blog->tags = 'test';
        $blog->createdTime = new \DateTime();
        $blog->authorId = 1;
        $blog->save();

        session()->flash('Success', 'Post has been added succcessfully');

        return redirect('/postBlog');
    }

    public function removePost(Request $request)
    {
        //
        $post = Post::findOrFail($request->id);

        $post->delete();

        session()->flash('Success', 'Post has been deleted succcessfully');

        return json_encode(['Success' => 'Post ' . $post->title . 'Removed Successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function showBlog($id)
    {
        //
        if (Post::where('id', '=', $id)->exists()) {
            $post = Post::findOrFail($id);
            return view('admin.pages.editBlog')->with('blog', $post);
        } else {
            session()->flash('Error', 'The blog doesn\'t exist');
            return redirect()->back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,
            ['title' => 'required',
                'description' => 'required|min:5']
        );

        if (Post::where('id', '=', $id)->exists()) {
            $blog = Post::findOrFail($id);
            $blog->title = $request->title;
            $blog->content = $request->description;
            $blog->tags = 'test';
            $blog->updatedTime = new \DateTime();
            $blog->authorId = 1;
            $blog->save();
            return redirect('/manageBlog');
        } else {
            session()->flash('Error', 'The blog doesn\'t exist');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
