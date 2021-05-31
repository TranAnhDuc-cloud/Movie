<?php

namespace App\Http\Requests\Admin;

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
            'title' => 'required|min:4|max:30|unique:movies',
            'name' => 'required|min:4|max:30',
            'directors' => 'required|string',
            'actor' => 'required|string',
            'time' => 'required',
            'date' => 'required',
            'url_link' => 'required',
            'url_picture' => 'required',
            'view' => 'required',
            'description' => 'required',
            'status' => 'required',
            'film_hot' => 'required',
            'contries_id' => 'required',
            'categories_id' => 'required',
            'type_movie' => 'required',
            'year' => 'required',
        ];
    }
}
