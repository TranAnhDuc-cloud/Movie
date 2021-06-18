<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class InfomationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check(); 
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'fullname' => 'required|string|min:6',
            // 'phone' => 'required|regex:/(01)[0-9]{9}/',
            'phone' => 'required|numeric|digits:10',
            'address' => 'required|string',
        ];
    }
}
