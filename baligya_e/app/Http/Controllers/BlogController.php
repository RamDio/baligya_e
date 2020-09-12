<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        //pagination: how many data should display in page
        $blogs = Blog::latest()->paginate(5);

        return view('blogs.index',compact('blogs'))
            ->with('i',(request()->input('page',1)-1)*5);
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required',
                'description' => 'required',
            ]
            );
            // CREATING DATA FROM MODELS/BLOG.PHP
            Blog::create($request->all());

            return redirect()->route('blogs.index')
                            ->with('success','Blog Created Successfully');
    }

    public function show(Blog $blog)
    {
        return view('blogs.show',compact('blog'));
    }

    public function edit(Blog $blog)
    {
        return view('blogs.edit',compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $request->validate(
            [
                'title'=>'required',
                'description'=>'required',
            ]
            );

            $blog->update($request->all());

            return redirect()->route('blogs.index')
                            ->with('success','blog updated success');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()->route('blogs.index')
                            ->with('success','blog deleted success');


    }




}
