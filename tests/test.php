<?php
require dirname(__DIR__) . '/vendor/autoload.php';

use Avalon\Testing\TestSuite;
use App\Kernel as AppKernel;
use App\Database\Seeder as AppSeeder;

TestSuite::configure(function ($suite) {
    $suite->setAppClass(AppKernel::class);
    $suite->setAppPath(dirname(__DIR__) . '/src');
    $suite->setSeeder(new AppSeeder);

    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PlainTextHandler);
    $whoops->register();
});

require __DIR__ . '/model_tests.php';

printf('Running tests for database %s' . PHP_EOL . PHP_EOL, getenv('DB'));
TestSuite::run();
