<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\ReCaptcha;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
          
        return [
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required'],
            'terms_and_services' => ['required'],
            'g-recaptcha-response' => ['required', new ReCaptcha]
        ];
    }
}
