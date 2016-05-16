<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMetaUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meta_user', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("user_id")->index();
            $table->string("avatar");
            $table->string("phone");
            $table->string("gender");
            $table->date("birth_day");
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
        Schema::drop('meta_user');
    }
}
