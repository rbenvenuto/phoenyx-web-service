<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks_users', function (Blueprint $table) {
            $table->integer('user_ID')->unsigned();
            $table->integer('task_ID')->unsigned();
        });
        Schema::table('tasks_users', function (Blueprint $table){
            $table->foreign('user_ID')
                ->references('id')
                ->on('users');
            $table->foreign('task_ID')
                ->references('id')
                ->on('tasks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks_users');
    }
}
