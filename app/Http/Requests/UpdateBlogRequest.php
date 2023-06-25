<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateBlogRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        if ($this->author and $this->user() == null){
            return false;
        }
        return true;
    }


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */

    public function rules(): array
    {
        $image_validation = 'string|image:jpeg,png,jpg,gif,svg|max:10048';

        if ($this->method == 'PUT'){
            return [
                
                'Title' => ['required'],
                'Content' => ['required'],
                'image' => ['required'],
                'type' => ['required' , Rule::in(['Politics' , 'Entertainment' , 'Travel' , 'Sports'])],
                'author' => ['required']

                //
            ];
        }
        
        return [
            'Title' => ['sometimes' , 'string', 'required'],
            'Content' => ['sometimes' , 'string' , 'required'],
            'image' => ['sometimes' ,  'string' , 'required'],
            'type' => ['sometimes' , 'string' , 'required' , Rule::in(['Politics' , 'Entertainment' , 'Travel' , 'Sports'])],
            'author' => ['sometimes' ,'string' , 'required'],
            'image' => ['sometimes' , 'required' ,'string|image:jpeg,png,jpg,gif,svg|max:10048']

        ];
    }
}
