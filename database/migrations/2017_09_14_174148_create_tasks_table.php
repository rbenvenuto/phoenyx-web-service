<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->string("task_title");
            $table->mediumText("task_desc");
            $table->dateTime("task_due_time");
            $table->dateTime("task_created_time");
            $table->integer("contact_ID")->unsigned()->nullable();
            $table->integer("created_by_ID")->unsigned();

            $table->foreign("created_by_ID")
                ->references("id")
                ->on("users");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
