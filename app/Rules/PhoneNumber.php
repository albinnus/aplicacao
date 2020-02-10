<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class PhoneNumber implements Rule
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
        //
     //   dd(preg_match("#^\(\d{2}\) 9?[6789]\d{3}-\d{4}$#", $value));
        return (preg_match("^\(+[0-9]{2,3}\) [0-9]{5}-[0-9]{4}$^", $value) > 0);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'O :attribute não é válido, favor digitar o número no formato (99) 99999-9999.';
    }
}
