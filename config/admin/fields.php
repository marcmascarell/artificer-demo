<?php

use \Mascame\Artificer\Fields\Types as ArtificerTypes;

return [

    'classmap' => [
//        'bool' => Types\Checkbox::class,
//        'boolean' => Types\Checkbox::class,
//		'image'   => \Mascame\Artificer\Plugins\Plupload\PluploadField::class,
        'hasOne'  => ArtificerTypes\Relations\hasOne::class,
        'hasMany' => ArtificerTypes\Relations\hasMany::class,
        'belongsTo' => ArtificerTypes\Relations\belongsTo::class,
    ],

    'types' => [
        // field_type => ['fieldname_1', 'fieldname_1')
        'key' => [
            'autodetect' => [
                'id',
            ],
        ],

        'published' => [],

        'checkbox' => [
            'autodetect' => [
                'accept',
                'active',
                'boolean',
                'activated',
                'confirmed',
            ],

            'widgets' => [
                \Mascame\Artificer\Widgets\Icheck::class,
            ],
        ],

        'custom' => [],

        'password' => [
            'autodetect' => [
                'password',
            ],
        ],

        'text' => [
            'autodetect' => [
                'title',
                'username',
                'name',
            ],
        ],

        'textarea' => [
            'autodetect' => [
                'description',
            ],

            'widgets' => [
                \Mascame\Artificer\Widgets\CKeditor::class,
            ],
        ],

        'wysiwyg' => [
            'autodetect' => [
                'body',
                'text',
            ],
        ],

        'radio' => [
            'autodetect' => [
                'option',
                'selection',
                'genre',
            ],

            'widgets' => [
                \Mascame\Artificer\Widgets\Icheck::class,
            ],
        ],

        'email' => [],

        'link' => [
            'autodetect' => [
                'url',
            ],
        ],

        'ip' => [
            'regex' => [
                '/_ip$/',
            ],
        ],

        'datetime' => [

            'regex' => [
                '/_at$/',
                '/_on$/',
            ],

            'widgets' => [
                \Mascame\Artificer\Widgets\DateTimepicker::class,
            ],

        ],

        'select' => [
            'autodetect' => [
                'tags',
                'choices',
            ],

            'class' => 'res',

            'widgets' => [
                \Mascame\Artificer\Widgets\Select2::class,
            ],
        ],

        'date' => [
            'autodetect' => [
                '_at',
            ],

            'widgets' => [
                \Mascame\Artificer\Widgets\DateTimepicker::class,
            ],
        ],

        'file' => [],

        'image' => [
            'autodetect' => [
                'image',
            ],
        ],

        'hasOne' => [
            'autodetect' => [
                '_id',
                'user_id',
                'fake_id',
            ],
        ],

        'hasMany' => [],

        'default' => [
            'type' => 'text',
        ],
    ],
];
