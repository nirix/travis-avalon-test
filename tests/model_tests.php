<?php

use Avalon\Testing\TestSuite;
use App\Models\User;
use App\Models\Group;

TestSuite::group('Model tests', function ($g) {
    $user = new User([
        'username' => sha1(microtime()),
        'password' => 'wat'
    ]);

    $g->test('Should create row', function ($t) use ($user) {
        $t->assertTrue($user->save());
    });

    $g->test('Should fetch row', function ($t) use ($user) {
        $row = User::find('username', $user['username']);

        $t->assertInstanceOf(User::class, $row);
    });

    $g->test('Should get relation', function ($t) use ($user) {
        $row = User::find('username', $user['username']);

        $t->assertInstanceOf(Group::class, $row->group());
    });
});
