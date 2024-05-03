<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    public function messages()
    {
        return[
            'category_id.required' => "Kategoriya tanlanmagan",
            'name.required'=> 'Produkt nomi kiritilmagan',
            'price.required'=>'Narxi kritilmagan',
            'price.integer' =>'Narxi sonda kiritilishi shart',
            'stock_quantity.integer' => 'Miqdori sonda kiritishi shart',
            'stock_quantity.required' => 'Miqdori kiritishi shart',
            'description.required' => 'Tavsifi kiritilmagan',
            'discount.integer' => 'Chegirma son bilan berilishi kerak',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'category_id' => 'required',
            'name' => 'required',
            'price' => 'required|integer',
            'stock_quantity' => 'required|integer',
            'description' => 'required',
            'discount' => 'integer',
        ];
    }
}
?>
