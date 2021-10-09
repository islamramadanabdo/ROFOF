<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->integer("vendor_id");
            $table->integer("stor_id");
            $table->integer("group_id")->default(0)->comment('This is comment');
            $table->string("FName" , 100);
            $table->string('LName' , 100);
            $table->string('email')->unique();
            $table->string("country");
            $table->string("phone");
            $table->date("brithday");
            $table->smallInteger("gender");
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
