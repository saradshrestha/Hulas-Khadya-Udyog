<?php

namespace Product\Rules;

use Category\Models\Category;
use Illuminate\Contracts\Validation\Rule;

class CheckPricing implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $price = request()->price;
        $type = request()->discount_type;
        $discount_price = $value;

        if($type == 1){
            if($discount_price > 100){
                return false;
            }
        }elseif($discount_price > $price){
            return false;
        }
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Please Check your Discount Price!!';
    }
}
