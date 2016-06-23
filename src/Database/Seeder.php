<?php

namespace App\Database;

use App\Models\Group;
use App\Models\User;

class Seeder
{
    public function seed()
    {
        $adminGroup = new Group([
            'name' => 'Admin',
            'is_admin' => true
        ]);

        $userGroup = new Group([
            'name' => 'User',
            'is_admin' => false
        ]);

        $adminGroup->save();
        $userGroup->save();
    }
}
