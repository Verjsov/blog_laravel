<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{

    /**
     * @var Blog
     */
    private $blog;

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function __construct(Blog $blog)
    {
        $this->blog = $blog;
    }

    public function index()
    {
        $blogs = Blog::all();

        return view('blog.index',
            ['blogs' => $blogs]
        );
    }

    public function newBlog()
    {
        return view('blog.create');
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name_blog' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('/create/blog')
                ->withErrors($validator)
                ->withInput();
        }
        $this->blog->newBlog($request->input('name_blog'));
        return redirect('/blogs');
    }

    public function delete(string $id)
    {
        Blog::destroy($id);
        return redirect('/blogs');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
