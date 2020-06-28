<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest {

    

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required'
        ];
    }

    public function messages() {
        return [
            'name.required' => 'El :attribute es obligatorio',            
            'description.required' => 'El :attribute es obligatorio',
            'price.required' => 'El :attribute es obligatorio'
        ];
    }

    public function response(array $errors) {
        $lerror = ["state" => 0];
        return new \Illuminate\Http\JsonResponse($lerror, 422);
    }

    //...
}
