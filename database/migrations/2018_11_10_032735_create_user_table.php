<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        //
        Schema::create("user", function(Blueprint $table) {
            $table->increments("id");
            $table->string("username");
            $table->string("password");
            $table->string("email");
            $table->int("stu_id");
            $table->string("avatar");
            $table->tinyInteger("priority");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        //
        Schema::drop("ct_user");
    }
}
