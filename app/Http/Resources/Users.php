<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Models\User;


class Users extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
       $blogs = [];

       foreach($this->collection as $blog){
            array_push($blogs , [
                'id' => $blog->id,
                'Title' => $blog->Title,
                'Content' => $blog->Content,
                'image' => $blog->image,
                'type' => $blog->type,
                'user_id' => [
                    'id' => $blog->user_id,
                    'name' => User::find($blog->user_id)->name
            ]
            ]);
       }

       return $blogs;
    }
}
