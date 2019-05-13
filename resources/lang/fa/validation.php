<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'The :attribute must be accepted.',
    'active_url' => 'The :attribute is not a valid URL.',
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'The :attribute may only contain letters.',
    'alpha_dash' => 'The :attribute may only contain letters, numbers, and dashes.',
    'alpha_num' => 'The :attribute may only contain letters and numbers.',
    'array' => ':attribute باید یک آرایه باشد.',
    'before' => 'The :attribute must be a date before :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        'string' => 'The :attribute must be between :min and :max characters.',
        'array' => 'The :attribute must have between :min and :max items.',
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'confirmed' => 'The :attribute confirmation does not match.',
    'date' => 'The :attribute is not a valid date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'different' => 'The :attribute and :other must be different.',
    'digits' => ':attribute باید :digits حرفی باشد.',
    'digits_between' => ':attribute باید بین :min و :max حرف باشد.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => ':attribute یک ایمیل معتبر نیست.',
    'exists' => ':attribute نامعتبر است.',
    'file' => ':attribute باید یک فایل باشد.',
    'filled' => ':attribute مقداردهی نشده است.',
    'gt' => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => ':attribute یک تصویر معتبر نیست.',
    'in' => ':attribute نامعتبر است.',
    'in_array' => ':attribute در :other وجود ندارد.',
    'integer' => ':attribute باید یک عدد صحیح باشد.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => ':attribute یک JSON معتبر نیست.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => ':attribute نباید بزرگ‌تر از :max باشد.',
        'file' => ':attribute نباید بزرگ‌تر از :max کیلوبایت باشد.',
        'string' => ':attribute نباید بیشتر از :max کاراکتر باشد.',
        'array' => ':attribute نمی‌تواند بیشتر از :max مورد باشد.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => ':attribute نباید کمتر از :min باشد.',
        'file' => ':attribute باید حداقل :min کیلوبایت باشد.',
        'string' => ':attribute باید حداقل :min کاراکتر باشد.',
        'array' => ':attribute باید حداقل :min مورد باشد.',
    ],
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'قالب :attribute نامعتبر است.',
    'numeric' => ':attribute باید یک عدد باشد.',
    'present' => 'The :attribute field must be present.',
    'regex' => 'قالب :attribute نامعتبر است.',
    'required' => ':attribute وارد نشده است.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values is present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid zone.',
    'unique' => ':attribute قبلا ثبت شده است.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => ':attribute یک URL معتبر نیست.',

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
            'rule-name' => 'custom-message',
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

    'attributes' => [
        'ad-duration' => 'مدت آگهی',
        'area' => 'مساحت',
        'attribute_id' => 'شناسه مشخصه',
        'available_at' => 'زمان آماده شدن',
        'background' => 'زمینه',
        'body' => 'متن',
        'categories' => 'دسته‌ها',
        'category_id' => 'شناسه دسته',
        'city' => 'شهر',
        'code' => 'کد',
        'color' => 'رنگ',
        'comment' => 'دیدگاه',
        'commentable' => 'امکان درج دیدگاه',
        'css_classes' => 'کلاس‌های CSS',
        'data' => 'دیتا',
        'district' => 'محله',
        'duration' => 'مدت زمان',
        'email' => 'ایمیل',
        'features' => 'امکانات',
        'first_name' => 'نام',
        'image' => 'تصویر',
        'label' => 'برچسب',
        'last_name' => 'نام خانوادگی',
        'lat' => 'موقیعت جغرافیایی',
        'lng' => 'موقیعت جغرافیایی',
        'mobile' => 'موبایل',
        'name' => 'نام',
        'parent' => 'والد',
        'photo' => 'عکس',
        'picture' => 'عکس',
        'pictures' => 'تصاویر',
        'pictures.*' => 'تصویر',
        'prefix' => 'پیشوند',
        'price' => 'قیمت',
        'published' => 'منتشر شده',
        'query' => 'عبارت جستجو',
        'required' => 'فیلد ضروری',
        'score' => 'امتیاز',
        'slider_id' => 'شناسه اسلایدر',
        'slug' => 'اسلاگ',
        'state' => 'استان',
        'subject' => 'موضوع',
        'subject' => 'موضوع',
        'suffix' => 'پسوند',
        'summary' => 'خلاصه',
        'tags' => 'برچسب‌ها',
        'terms-agreement' => 'موافقت نامه',
        'title' => 'عنوان',
        'type' => 'نوع',
        'unit_count' => 'تعداد واحد',
        'url' => 'لینک',
        'votable' => 'امکان ثبت امتیاز',
        'website' => 'وب‌سایت',
        'weight' => 'وزن',
    ],
];
