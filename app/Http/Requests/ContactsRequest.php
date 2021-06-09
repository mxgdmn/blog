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
            'f-name' => 'required',
            'email' => 'required|email',
            'message' => 'required|min:11|max:600'
        ];
    }
    public function messages()
    {
        return [
            'f-name.required' => 'Введите ваше имя!',
            'email.required' => 'Введите адрес электронной почты!',
            'message.required' => 'Добавьте сообщение!'
        ];
    }
}
