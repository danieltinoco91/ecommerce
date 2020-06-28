<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest {

    

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'name' => 'required',
            'email' => 'required'
        ];
    }

    public function messages() {
        return [
            'name.required' => 'El :attribute es obligatorio',
            'email.required' => 'El :attribute es obligatorio'
        ];
    }

    public function response(array $errors) {
        $lerror = ["state" => 0];
        return new \Illuminate\Http\JsonResponse($lerror, 422);
    }

    //...
}
