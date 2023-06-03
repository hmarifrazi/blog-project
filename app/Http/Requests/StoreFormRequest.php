<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'description' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Name field is must be filled out',
            // 'description.required' => 'Description field is must be required',
        ];
    }
public function attributes()
    {
        return [
            'description' => ' Category description',
        ];
    }

}
