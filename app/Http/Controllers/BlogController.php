<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\Blog; 
use App\Http\Resources\BlogCollection;
use App\Http\Resources\BlogResource;
use App\Services\v1\BlogQuery;


/** 
 * A function that stores the image uploaded to appropriate folder
 * 
 */

function storeImage(Request $request){
    $uploadFolder = 'users';
    $image = $request->file('image');
    $image_uploaded_path = $image->store($uploadFolder, 'public');
    return $image_uploaded_path;

}

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //

            $blogQuery = new BlogQuery();
            $query = $blogQuery->transform($request);

            foreach($query as $q){
                foreach($q as $arr){
                    echo $arr;
                }
            }
            $authordetails=$request->query('authordetails');
            $blogs = Blog::where($query);

            if ($authordetails){
                $blogs = $blogs->with('author');
            }

            return new BlogCollection($blogs->paginate()->appends($request->query()));
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
            'author' => 'required|string',
            'type' => 'required|string',
            'image' => 'required|image:jpeg,png,jpg,gif,svg|max:10048'
        ]);

        $image_uploaded_path = storeImage($request);


        return Blog::create([
            'user_id' => (int) $fields['author'],
            'Title' => $fields['Title'],
            'Content' => $fields['Content'],
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

        $authordetails = request()->query('authordetails');

        if ($authordetails) {
            return new BlogResource($id->loadMissing('user_id'));
        }

        return new BlogResource($id);

      
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(UpdateBlogRequest $request, Blog $id)
    { 
       if ($request->image){
            $request->image = storeImage($request->image);
       }
       

        return $id->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
