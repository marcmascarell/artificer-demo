<?php

return [

    /*
     * Model title
     */
    'title' => 'Test model title',

    /*
     * The fields
     */
    'fields' => [
        'choices' => [
            'title' => 'test',
            'type' => 'radio',
            'choices' => [
                'Correo del usuario',
                'potosin',
            ],
//            'attributes' => [
//                'multiple' => 'multiple'
//            ]
        ],
    ],

    'guarded' => [
        'id',
    ],

    'rules' => [
        'data' => 'required',
    ],

];
