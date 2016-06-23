<?php

namespace App\Database\Migrations;

use Avalon\Database\Migration;

class CreateUsers extends Migration
{
    public function up()
    {
        $this->createTable('users', function ($t) {
            $t->addColumn('username', 'string');
            $t->addColumn('password', 'string');
            $t->addColumn('group_id', 'integer', ['default' => 2]);

            $this->timestamps($t);
        });
    }

    public function down()
    {
        $this->dropTable('users');
    }
}
