<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use phpDocumentor\Reflection\PseudoTypes\True_;

class Request_registration extends FormRequest
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

                'firstname'=>'required|max:15',
                'lastname'=>'required|max:15',
                'phone_number'=>'required|numeric|regex:/(09)(\d){9}/|digits:11',
                'job_title'=>'required|max:15',
                'job_role'=>'required',
                'company_name'=>'required|max:30',
                'industry'=>'required',
                'company_type'=>'required',
                'terms' => 'required',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed',


        ];
    }

    public function messages()
    {
        return[
        'firstname.required'=>'*Firstname is required',
        'firstname.max'=>'*Maximum lenght is 15',
        'lastname.required'=>'*Lastname is required',
        'lastname.max'=>'*Maximum lenght is 15',
        'phone_number.required'=>'*Phone number is required',
        'phone_number.numeric'=>'*Example format: 09100719502',
        'phone_number.digits'=>'*Example format: 09100719502',
        'phone_number.regex'=>'*Example format: 09100719502',
        'job_title.required'=>'*Job Title is required',
        'job_title.max'=>'*Maximum lenght is 15',
        'job_role.required'=>'*Please select',
        'company_name.required'=>'*Company name is required',
        'company_name.max'=>'*Maximum lenght is  15',
        'industry.required'=>'*Please select ',
        'company_type.required'=>'*Please select',
        'terms.required'=>'*The term and condition is required'
        ];
    }
}
