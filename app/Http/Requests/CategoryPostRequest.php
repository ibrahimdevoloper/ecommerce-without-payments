<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CategoryPostRequest extends FormRequest
{
    /**
     * The URI that users should be redirected to if validation fails.
     *
     * @var string
     */
    protected $redirect = '/dashboard/categories/create';
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $user=Auth::user();

        return $user->isAdmin();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:categories|max:191',
            'description' => 'required|max:191',
            'image' => 'required|image',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'A Name is required',
            'description.required' => 'A Description is required',
            'image.required' => 'An Image is required',
            'name.max' => 'The Name\'s limit has been exceeded',
            'description.max' => 'The Description\'s limit has been exceeded',
            'image.image' => 'Please upload an Image',
            'name.unique' => 'The Name must be unique',
        ];
    }
}
