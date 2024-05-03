<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegisterRequest extends FormRequest
{
    public  function messages()
    {
        return[
            'name.required' => "Ism kiritilmagan",
            'email.required' => "Email kiritilmagan",
            'last_name.required' => "Familiya kiritilmagan",
            'password.required' => "Parol kiritilmagan",
            'password.min' => "Minimum 8 ta belgidan iborat bo'lishi kerak" ,
            'confirm_password.required' => "Parol tasdiqlash kiritilmagan",
            'confirm_password.same' =>'Takroriy parol bir xil emas',
            'email.unique' => 'Bunday emailli foydalanuvchi mavjud',

        ];
    }
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'last_name' => 'required',
            'email'=> 'required|email:rfc,dns|unique:users,email',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password',

        ];
    }
}
