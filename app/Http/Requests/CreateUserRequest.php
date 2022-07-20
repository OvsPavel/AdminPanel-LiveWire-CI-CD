<?php

namespace App\Http\Requests;

use App\Models\Role;
use App\Models\Station;
use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|unique:users',
            'password' => 'required',
            'role_id' => 'required|integer|exists:' . Role::class . ',id',
            'station_id' => 'required|integer|exists:' . Station::class . ',id',
            'address' => 'required'
        ];
    }
}