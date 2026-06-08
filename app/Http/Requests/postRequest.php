<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class postRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            "title"=> "required|string|min:5",
            "image_url"=> "required|string|mimes:jpg,png,jpeg,gif,svg",
        ];
    }
    public function message(){
        return [
            "title.required" => "شما باید عنوان پست را مشخص کنید",
            "title.string"=> "شما باید عنوان پست را متن اضافه نمایید",
            "title.min"=> "شما حداقل باید 5 حرف برای عنوان اضافه نمایید",
            "image_url.mimes"=> "پسوند فایل عکس باید به فرمت jpg, png, jpeg, gif, svg باشد"
        ];
    }
}
