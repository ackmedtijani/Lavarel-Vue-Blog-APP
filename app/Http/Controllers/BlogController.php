<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\Blog;
use App\Http\Resources\Users as UserResource;
use App\Http\Resources\BlogResource;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
            return new UserResource(Blog::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {
        $fields = $request->validate([
            'Title' => 'required|string',
            'Content' => 'required|string',
            'author' => 'required|int',
            'image' => 'required|string',
            'type' => 'required|string|image:jpeg,png,jpg,gif,svg|max:10048'
        ]);

        $uploadFolder = 'users';
        $image = $request->file('image');
        $image_uploaded_path = $image->store($uploadFolder, 'public');

        return Product::create([
            'Title' => $fields['Title'],
            'Content' => $fields['Content'],
            'author' => $fields['int'],
            'image' => $image_uploaded_path,
            'type' => $fields['type']

        ]);
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $id)
    {
        return new BlogResource($id);

      
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UpdateBlogRequest $request , Blog $blog)
    {
        $blog->update($request->all());
        return $blog; 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
    
        $blog->update($request->all());
        return $blog;   //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
