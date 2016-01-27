<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateCustomerRequest extends Request
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
            'billingCompanyName' => ['required', 'max:100'],
            'billingFirstName' => ['required', 'max:100'],
            'billingLastName' => ['required', 'max:100'],
            'taxId' => ['max:100'],
            'billingAddress1' => ['required','max:100'],
            'billingAddress2' => ['max:100'],
            'billingCity' => ['required','max:100'],
            'billingPostCode' => ['required','max:100'],
            'billingCountry' => ['required','max:100'],
            'billingPhone' => ['max:100'],
            'billingFax' => ['max:100']
        ];
    }
}
