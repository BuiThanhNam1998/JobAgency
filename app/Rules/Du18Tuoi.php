<?php

namespace App\Rules;

use Carbon\Carbon;
use Illuminate\Contracts\Validation\Rule;

class Du18Tuoi implements Rule
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
        $now = Carbon::now();
        $ngaysinh = Carbon::parse($value);
        $ngay_duoc_phep_nop_don = $ngaysinh->addYear(18);
        return $ngay_duoc_phep_nop_don->lessThan($now);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Bạn không đủ 18 tuổi để nộp hồ sơ';
    }
}
