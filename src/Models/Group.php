<?php

namespace App\Models;

class Group extends \Avalon\Database\Model
{
    protected static $_tableAlias = 'g';

    protected static $_validations = [
        'name' => ['required', 'unique']
    ];

    protected static $_hasMany = [
        'users'
    ];

    protected static $_dataTypes = [
        'is_admin' => 'boolean'
    ];
}
