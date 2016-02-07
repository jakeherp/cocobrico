<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateAddressRequest extends Request
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
            'companyName' => ['required', 'max:100'],
            'firstName' => ['required', 'max:100'],
            'lastName' => ['required', 'max:100'],
            'taxId' => ['max:100'],
            'address1' => ['required','max:100'],
            'address2' => ['max:100'],
            'city' => ['required','max:100'],
            'postCode' => ['required','max:100'],
            'country' => ['required','max:100'],
            'phone' => ['max:100'],
            'fax' => ['max:100']
        ];
    }
}
