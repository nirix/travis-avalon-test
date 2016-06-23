<?php

namespace App\Models;

class User extends \Avalon\Database\Model
{
    protected static $_tableAlias = 'u';

    protected static $_validations = [
        'username' => ['required', 'unique'],
        'password' => ['required']
    ];

    protected static $_belongsTo = [
        'group'
    ];
}
