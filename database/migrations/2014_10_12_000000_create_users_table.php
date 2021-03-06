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
            $table->bigIncrements('id');
            $table->string('username')->unique();
            $table->string('name')->nullable();
            $table->string('email')->unique()->nullable();
            $table->text('avatar')->nullable();
            $table->text('bio')->nullable();
            $table->text('blog')->nullable();
            $table->text('status')->nullable();
            $table->string('auth_provider');
            $table->string('auth_token')->nullable();
            $table->string('auth_type')->default('user');
            $table->boolean('elite')->default(false);
            $table->boolean('unclaimed')->default(false);
            $table->json('meta')->nullable();
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
