<?php

namespace App\Http\Requests;

use App\Models\Companie;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CompanieRequest extends FormRequest
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
        if (request()->routeIs('companie.store')) {
            $emailRule = 'required';
        } elseif (request()->routeIs('companie.update')) {
            $emailRule = 'sometimes';
        }

        return [
            'name' => 'required',
            // 'email'=>'required|email|unique:companies,email',
            // 'email'=>'required|email|unique:companies,email'.$this->companie->id,
            'email' => ['required', Rule::unique('companies')->ignore($this->companie->id)],
            'logo' => 'nullable|mimes:jpg,jpeg,png|image|max:2048',
            'website' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name' => 'name is required',
            'email' => 'email is required',
            'logo' => 'logo is required',
            'website' => 'website is required',

        ];
    }
}
