<?php

return [
    '__name' => 'lib-ip-db',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/lib-ip-db.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/lib-ip-db' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'lib-ip-locator' => NULL
            ],
            [
                'lib-model' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [
            'LibIpDb\\Model' => [
                'type' => 'file',
                'base' => 'modules/lib-ip-db/model'
            ],
            'LibIpDb\\Library' => [
                'type' => 'file',
                'base' => 'modules/lib-ip-db/library'
            ]
        ],
        'files' => []
    ],
    'libIpLocator' => [
        'finder' => [
            'LibIpDb\\Library\\Finder' => 100000
        ],
        'keeper' => [
            'LibIpDb\\Library\\Keeper' => 1
        ]
    ]
];