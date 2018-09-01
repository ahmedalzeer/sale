<?php

return [



    'accepted'             => 'صفة غير مقبولة',
    'active_url'           => 'الصفحة غير موجودة.',
    'after'                => 'يجب ادخال بيانات',
    'alpha'                => 'يجب ادخال حروف فقط',
    'alpha_dash'           => 'يجب ان يحتوي علي حروف وارقام فقط',
    'alpha_num'            => 'يجب ان يحتوي علي حروف وارقام فقط',
    'array'                => 'يجب ان تكون مصفوفة',
    'before'               => 'يجب ادخال بيانات',
    'between'              => [
        'numeric' => 'يجب ان تكون بين الحد الادني والاقصي',
        'file'    => 'يجب ان تكون بين الحد الاقصي والادني للكيلو بايت',
        'string'  => 'يجب ان تكون بين الحد الادني والاقصي للحروف',
        'array'   => 'يجب ان تكون بين الحد الادني والاقصي للاصناف',
    ],
    'boolean'              => 'يجب ان يكون قيمة محققة او غير محققة',
    'confirmed'            => 'التاكيد غير متطابق',
    'date'                 => 'بيانات غير مطابقة لشروط البرنامج',
    'date_format'          => 'لا يوجد صيغة مماثلة',
    'different'            => 'يجب ان تكون الصفة مختلفة',
    'digits'               => 'يجب ان يكون ارقام',
    'digits_between'       => 'يجب ان يكون ارقام بين الحد الادني والاقصي',
    'dimensions'           => 'ابعاد الصورة غير مناسبة',
    'distinct'             => 'قيمة مكررة',
    'email'                => 'الايميل غير صحيح',
    'exists'               => 'اختيار غير صحيح',
    'file'                 => 'يجب ان يكون ملف',
    'filled'               => 'لابد من ملا حقل الادخال',
    'image'                => 'لابد ان تكون صورة',
    'in'                   => 'اختيار غير صحيح',
    'in_array'             => 'هذا الحقل غير موجود في الاخر',
    'integer'              => 'يجب ان يكون رقمي',
    'ip'                   => 'الاي بي يجب ان يكون متاح',
    'json'                 => 'يجب ان يكون نص',
    'max'                  => [
        'numeric' => 'ربما يكون اكبر من الحد الاقصي',
        'file'    => 'ربما يكون اكبر من الحد الاقصي للكيلو بايتس',
        'string'  => 'ربما يكون اكبر من الحد الاقصي للحروف',
        'array'   => 'ربما يكون اكبر من الحد الاقصي للاصناف',
    ],
    'mimes'                => 'يجب ان يكون ملف',
    'mimetypes'            => 'يجب ان يكون ملف',
    'min'                  => [
        'numeric' => 'ربما يكون اقل من الحد الادني',
        'file'    => 'ربما يكون اقل من الحد الادني للكيلوبيتس',
        'string'  => 'ربما يكون اقل من الحد الادني للحروف',
        'array'   => 'ربما يكون اقل من الحد الادني للاصناف',
    ],
    'not_in'               => 'الصفة المختارة غير متاحة',
    'numeric'              => 'يجب ان يكون رقم',
    'present'              => 'يجب ان يكون الان',
    'regex'                => 'الصيغة غير متاحة',
    'required'             => 'هذا الحقل يجب ادخاله',
    'required_if'          => 'هذا الحقل يجب ادخاله',
    'required_unless'      => 'هذا الحقل يجب ادخاله',
    'required_with'        => 'هذا الحقل يجب ادخاله',
    'required_with_all'    => 'هذا الحقل يجب ادخاله',
    'required_without'     => 'هذا الحقل يجب ادخاله',
    'required_without_all' => 'هذا الحقل يجب ادخاله',
    'same'                 => 'لابد ان يتطابق',
    'size'                 => [
        'numeric' => 'يجب ان يكون حجم',
        'file'    => 'يجب ان يكون كيلوبايتس',
        'string'  => 'يجب ان يكون حروف',
        'array'   => 'يجب ان يكون اصناف',
    ],
    'string'               => 'يجب ان يكون نص',
    'timezone'             => 'يجب ان يكون منطقة موجودة',
    'unique'               => 'موجود بالفعل',
    'uploaded'             => 'فشل التحميل',
    'url'                  => 'الصيغة غير مناسبة',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'رسالة العميل',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];