<?php

return [

    /*
     * Model title
     */
    'title' => 'User',

    /*
     * The fields
     */
    'fields' => [
        'id' => [
            'title' => 'test',
        ],
        'email' => [
            'wiki' => 'Correo del usuario',
        ],
    ],

    'guarded' => [
        'id',
    ],

    'rules' => [
        'name' => 'required',
    ],

];
