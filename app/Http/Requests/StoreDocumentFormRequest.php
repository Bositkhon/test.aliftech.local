<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreDocumentFormRequest extends FormRequest
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
            'folder_id' => [
                'required',
                'string',
                Rule::exists('folders', 'id')->whereNull('deleted_at')
            ],
            'files' => [
                'required',
                'array'
            ],
            'files.*' => [
                'mimes:png,jpeg,jpg,pdf,xlsx,xls,doc,docx'
            ]
        ];
    }
}
