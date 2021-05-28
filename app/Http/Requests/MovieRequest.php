<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'bail|required',
            'directors' => 'bail|required',
            'actor' => 'bail|required',
            'time' => 'bail|required',
            'date' => 'bail|required',
            'url_picture' => 'bail|required',
            'urrl_link' => 'bail|required',
            'view' => 'bail|required',
            'description' => 'bail|required',
            'status' => 'bail|required',
            'film_hot' => 'bail|required',
            'name' => 'bail|required',
            'type_movie' => 'bail|required',
            'year' => 'bail|required',
            'categories_id' => 'bail|required',
            'contries_id' => 'bail|required',
        ];
    }
    public function messages()
    {
        return [
            'title.required'=>'Title is required',
            'title.min'=>'Title is min = 5',
            'title.max'=>'Title is max = 50',
            'author.required'=>'Author is required',
            'author.min'=>'Author is min = 5 ',
            'author.max'=>'Author is max = 5 ',
            'description.required'=> trans('category.desc_required'),
            'description.min'=>'Description is min = 10',
            'description.max'=>'Description is max = 100',
            'image.required'=>'image is required',
            'image.min'=>'image is min = 5',
            'image.max'=>'image is max = 20',
            'isbn.required'=>'ISBN is required',
            'isbn.min'=>'ISBN is min = 5',
            'isbn.max'=>'ISBN is max = 20',
        ];
    }
}
