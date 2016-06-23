<?php
$config = [
    'environment' => 'test',
    'db' => [
        'test' => []
    ]
];

$db = [
    'mysql' => [
        'driver'   => 'pdo_mysql',
        'host'     => '127.0.0.1',
        'user'     => 'travis',
        'password' => '',
        'dbname'   => 'app_test',
        'prefix'   => 'test_',
        'charset'  => 'utf8'
    ],

    'postgresql' => [
        'driver'   => 'pdo_pgsql',
        'host'     => '127.0.0.1',
        'user'     => 'postgres',
        'password' => '',
        'dbname'   => 'app_test',
        'prefix'   => 'test_',
        'charset'  => 'utf8'
    ],

    'sqlite' => [
        'driver' => 'pdo_sqlite',
        'memory' => true
    ]
];

$config['db']['test'] = $db[getenv('DB')];

return $config;
