<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class ContactSendRequest
 * @package App\Http\Requests
 *
 * @author Oleh Borysenko <oleg.borisenko@morefromit.com>
 */
class ContactSendRequest extends FormRequest
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
            'name' => 'required|string|max:64',
            'email' => 'required|email',
            'message' => 'required|string|min:5|max:255',
            'captcha' => 'required|recaptcha',

        ];
    }

    /**
     * response
     * @author Oleh Borysenko <oleg.borisenko@morefromit.com>
     * @param array $errors
     * @return \Response
     */
    public function response(array $errors)
    {
        return response(['status' => false, 'errors' => $errors], 400);
    }
}
