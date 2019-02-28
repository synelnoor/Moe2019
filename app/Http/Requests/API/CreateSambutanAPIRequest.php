<?php

namespace App\Http\Requests\API;

use App\Models\Sambutan;
use Webcore\Generator\Request\APIRequest;

class CreateSambutanAPIRequest extends APIRequest
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
        return Sambutan::$rules;
    }
}
