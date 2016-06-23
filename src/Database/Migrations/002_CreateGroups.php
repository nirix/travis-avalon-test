<?php

namespace App\Database\Migrations;

use Avalon\Database\Migration;

class CreateGroups extends Migration
{
    public function up()
    {
        $this->createTable('groups', function ($t) {
            $t->addColumn('name', 'string');
            $t->addColumn('is_admin', 'boolean', ['default' => false]);
        });
    }

    public function down()
    {
        $this->dropTable('usergroups');
    }
}
