<?php

return [
    'LibIpDb\\Model\\Ipdb' => [
        'fields' => [
            'id' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => TRUE,
                    'primary_key' => TRUE,
                    'auto_increment' => TRUE
                ],
                'index' => 1000
            ],
            'ip' => [
                'type' => 'VARCHAR',
                'length' => 45,
                'attrs' => [
                    'null' => false,
                    'unique' => true 
                ],
                'index' => 2000
            ],
            'city' => [
                'type' => 'VARCHAR',
                'length' => 150,
                'attrs' => [],
                'index' => 3000
            ],
            'state_name' => [
                'type' => 'VARCHAR',
                'length' => 150,
                'attrs' => [],
                'index' => 4000
            ],
            'state_code' => [
                'type' => 'VARCHAR',
                'length' => 10,
                'attrs' => [],
                'index' => 5000
            ],
            'country_name' => [
                'type' => 'VARCHAR',
                'length' => 150,
                'attrs' => [],
                'index' => 6000
            ],
            'country_code' => [
                'type' => 'VARCHAR',
                'length' => 10,
                'attrs' => [],
                'index' => 7000
            ],
            'continent_name' => [
                'type' => 'VARCHAR',
                'length' => 150,
                'attrs' => [],
                'index' => 8000
            ],
            'continent_code' => [
                'type' => 'VARCHAR',
                'length' => 10,
                'attrs' => [],
                'index' => 9000
            ],
            'timezone' => [
                'type' => 'VARCHAR',
                'length' => 25,
                'attrs' => [],
                'index' => 10000
            ],
            'expires' => [
                'type' => 'DATETIME',
                'attrs' => [
                    'null' => false
                ],
                'index' => 11000
            ],
            'updated' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP',
                    'update' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 12000
            ],
            'created' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 13000
            ]
        ]
    ]
];