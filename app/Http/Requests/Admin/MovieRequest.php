<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'title' => [
                'required',
                'min:4',
                'max:50',
                Rule::unique('movies','title')->ignore($this->id)
            ],
            'name' => 'required|min:10|max:50',
            'directors' => 'required|string',
            'actor' => 'required|string',
            'time' => 'required',
            'date' => 'required',
            'url_picture' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'url_link' => 'required|mimes:avi,mp4,wmv,mov,flv,ts,m3u8|max:20000',
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
