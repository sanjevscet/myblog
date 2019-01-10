<?php

namespace Myblog\Blog\Http\Controllers;

use App\Http\Controllers\Controller;
use Myblog\Blog\Models\Blog;
use Myblog\Blog\Http\Requests\BlogStoreRequest;
use Illuminate\Http\Request;
use Auth;
use App\User;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Auth::user()->blogs()->latest()->get();
        //dd($blogs->toarray());

        return view()->first(['myblog.blogs', 'blog::blogs'], ['blogs' => $blogs]);
        // return view('blogs', 'blog::blogs');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view()->first(['myblog.createBlog', 'blog::createBlog']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(BlogStoreRequest $request)
    {
        // $userId = Auth::user()->id;
        // $user = User::findOrFail($userId);
        // $user->blogs()->delete();
        // Auth::user()->blogs()->delete();
        Auth::user()->blogs()->save(new Blog($request->all()));
        $request->session()->flash('status', 'Blog created successful!');

        return redirect()->route('myblog.blogs');
        // dd(Auth::user()->toarray());
        // dd(auth::user(), $request->toArray());
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Blog $blog
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Blog $blog
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Blog                $blog
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Blog $blog
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
    }
}
