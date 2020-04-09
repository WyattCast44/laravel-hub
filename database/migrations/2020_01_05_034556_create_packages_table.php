<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('name')->index();
            $table->string('vendor')->index();
            $table->string('display_name')->nullable();
            $table->text('description')->nullable();
            $table->string('install_command')->index()->nullable();
            $table->text('repo_url')->nullable();
            $table->text('package_url')->nullable();
            $table->boolean('official')->default(false);
            $table->unsignedBigInteger('stars_count')->default(0);
            $table->text('parsed_readme')->nullable();
            $table->dateTime('last_synced_at')->nullable()->default(now());
            $table->json('meta')->nullable();
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packages');
    }
}
