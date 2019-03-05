<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResellerListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reseller_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reseller_name');
            $table->string('email');
            $table->string('phone_no');
            $table->string('username');
            $table->string('password');
            $table->string('confirm_password');
            $table->string('website');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reseller_lists');

    }
}
