<?php

namespace App\Http\Requests\RegionAnatomica;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegionAnatomicaRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'descripcion' => 'max:50|required',
        ];
    }
}