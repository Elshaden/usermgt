<?php
// config for Elshaden/LivewireUsermgt
return [
    'route_prefix' => 'usermgt',


    'livewire_components' => [

        //     'some-component'=>'some-class::class'

        'user-list' => \Elshaden\LivewireUsermgt\Http\Livewire\UsersList::class,
        'user-tabs'=>\Elshaden\LivewireUsermgt\Http\Livewire\UsersTabs::class,
    ],

    'user_model'=> '\App\Models\User',

    'user_model_class'=> '\\App\\Models\\User',
    'user_profile' => [

        'name' => ['order' => 0, 'field' => 'name',
            'trans_lable' => ['ar' => 'الأسم', 'en' => 'Name'],
            'input_type' => 'text',
            'validation' => 'required',
            'hidden'=>false,
            'form_required' => true,
            'col-span' => 1,
        ],

        'email' => ['order' => 1, 'field' => 'email',
            'trans_lable' => ['ar' => 'الإيميل', 'en' => 'Email'],
            'input_type' => 'email',
            'validation' => 'required',
            'hidden'=>false,
            'form_required' => true,
            'col-span' => 1,
        ],

        'password' => ['order' => 1, 'field' => 'password',
            'trans_lable' => ['ar' => 'الباسورد', 'en' => 'Password'],
            'input_type' => 'password',
            'validation' => '',
            'hidden'=>true,
            'form_required' => false,
            'col-span' => 1,
        ],


    ]
];
