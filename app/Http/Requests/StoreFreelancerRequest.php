<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFreelancerRequest extends FormRequest
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
            'name' => 'required|max:15',
            'email' => 'required|email|unique:users',
            'phone' => 'required|regex:/[0-9]{9}/|unique:users',
            'country' => 'required',
            'work_title'=>'required|min:8',
            'service_id'=> 'required',
            'education'=>'required|min:8',
            'languages'=>'required',
            'bio'=> 'required|min:30',
            'photo'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'password' => 'required|min:6',
        ];
    }
}
