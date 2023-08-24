<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class InstrumentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            //
        ];
    }

    public function getInstrument(): array
    {
        $instrumentInfo = [
            'instrument-name' => $this->input('maker').' '.$this->input('instrument-name'),
            'price' => (int) $this->input('price'),
            'category' => $this->input('category'),
            'type' => $this->input('type'),
            'body-material' => $this->input('body-material'),
            'fret' => (int) $this->input('fret'),
            'pickups' => $this->input('pickups'),
            'comment' => $this->input('comment'),
        ];
        return $instrumentInfo;
    }
}
