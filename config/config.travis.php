<?php
$config = [
    'environment' => 'test',
    'db' => [
        'test' => []
    ]
];

$db = getenv('DB');

if ($db == 'mariadb' || $db == 'mysql') {
    // MariaDB and MySQL config
    $config['db']['test'] = [
        'driver'   => 'pdo_mysql',
        'host'     => '127.0.0.1',
        'user'     => 'travis',
        'password' => '',
        'dbname'   => 'app_test',
        'prefix'   => 'test_',
        'charset'  => 'utf8'
    ];
} elseif ($db == 'postgresql') {
    // PostgreSQL config
    $config['db']['test'] = [
        'driver'   => 'pdo_pgsql',
        'host'     => '127.0.0.1',
        'user'     => 'postgres',
        'password' => '',
        'dbname'   => 'app_test',
        'prefix'   => 'test_',
        'charset'  => 'utf8'
    ];
} elseif ($db == 'sqlite') {
    // SQLite config
    $config['db']['test'] = [
        'driver' => 'pdo_sqlite',
        'memory' => true
    ];
}

return $config;
