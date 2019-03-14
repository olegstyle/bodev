<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;

class ContactSendRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:64'],
            'email' => ['required', 'email'],
            'message' => ['required', 'string', 'min:5', 'max:255'],
            'captcha' => ['required', 'recaptcha'],
        ];
    }

    public function response(array $errors): JsonResponse
    {
        return response()->json(['status' => false, 'errors' => $errors], JsonResponse::HTTP_BAD_REQUEST);
    }
}
