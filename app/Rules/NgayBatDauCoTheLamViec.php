<?php

namespace App\Rules;

use Carbon\Carbon;
use Illuminate\Contracts\Validation\Rule;

class NgayBatDauCoTheLamViec implements Rule
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
        $ngaybatdaucothelamviec = Carbon::parse($value);
        $ngay_duoc_phep_nop_don = $ngaybatdaucothelamviec->addDays(14);
        return $ngay_duoc_phep_nop_don->greaterThan($now);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Ngày bắt đầu có thể làm việc không hợp lệ';
    }
}
