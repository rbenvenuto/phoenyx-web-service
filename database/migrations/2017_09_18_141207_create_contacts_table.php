<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string("contact_name");
            $table->string("lead_referral_source")->nullable();
            $table->dateTime("date_initial_contact");
            $table->string("title");
            $table->string("company")->nullable();
            $table->string("industry")->nullable();
            $table->mediumText("activity_desc")->nullable();
            $table->string("address_1")->nullable();
            $table->string("address_2")->nullable();
            $table->string("address_3")->nullable();
            $table->string("address_city")->nullable();
            $table->string("address_state")->nullable();
            $table->string("address_cep")->nullable();
            $table->string("address_country")->nullable();
            $table->string("phone")->nullable();
            $table->string("email")->nullable();
            $table->integer("contact_status_ID")->unsigned()->nullable();
            $table->string("website")->nullable();
            $table->string("linkedin_profile")->nullable();
            $table->mediumText("additional_desc")->nullable();
            $table->integer("representative_ID")->unsigned();
            $table->integer("rating")->nullable();
            $table->mediumText("demand_desc")->nullable();
            $table->double("budget", 9, 2)->nullable();            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
