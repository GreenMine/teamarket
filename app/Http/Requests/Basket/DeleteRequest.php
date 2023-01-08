<?php

namespace App\Http\Requests\Basket;

use App\Rules\BasketExistsRule;
use Illuminate\Foundation\Http\FormRequest;

class DeleteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }
	
	public function prepareForValidation() {
		$this->merge(['basket_item_id' => $this->route('basketItemId')]);
	}
	
	/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules() {
        return [
            'basket_item_id' => [new BasketExistsRule()]
        ];
    }
}
