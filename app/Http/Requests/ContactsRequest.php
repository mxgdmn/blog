<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactsRequest extends FormRequest
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
            'firstName' => 'required|max:100',
            'lastName' => 'required|max:150',
            'email' => 'required|email',
            'subject' => 'required|max:255',
            'message' => 'required|min:11|max:600'
        ];
    }
    public function messages()
    {
        return [
//            'firstName.required' => 'Введите ваше имя!',
//            'lastName.required' => 'Введите вашу фамилию!',
//            'email.required' => 'Введите адрес электронной почты!',
//            'message.required' => 'Добавьте сообщение!'
        ];
    }
}
