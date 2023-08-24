<?php

namespace App\Http\Requests\Customer;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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

    public function reserve(): array
    {
        $reservationInfo = [
            'instrument-id' => $this->input('instrument_id'),
            'reservation-date' => $this->input('reservation-date'),
            'name' => $this->input('name'),
            'phone-number' => $this->input('phone-number'),
            'comment' => $this->input('comment')
        ];
        return $reservationInfo;
    }
}
