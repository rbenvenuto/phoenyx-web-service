<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts_tasks', function (Blueprint $table) {
            $table->integer('contact_ID')->unsigned();
            $table->integer('task_ID')->unsigned();
        });

        Schema::table('contacts_tasks', function (Blueprint $table){
            $table->foreign('contact_ID')
                ->references('id')
                ->on('contacts');
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
        Schema::dropIfExists('contacts_tasks');
    }
}
