<?php

return [

    /**
     * Model title
     */
    'title' => "User",

    /**
     * The fields
     */
	'fields' => [
		'id' => [
			'title' => 'test'
		],
        'email' => [
            'wiki' => 'Correo del usuario'
        ]
	],

    'guarded' => [
        'id',
        'password'
    ],

    'rules' => [
        'remember_token' => 'required'
    ],


];