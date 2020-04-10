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

            // PK
            $table->bigIncrements('id');

            // The user_id of the package owner, not neccessarily the submitter
            $table->unsignedBigInteger('user_id');

            // The user_id of the package submitter
            $table->unsignedBigInteger('submitter_id')->nullable();

            // Package name, as given by GitHub
            $table->string('name')->index();

            // Vendor name, should be the username of the user_id
            $table->string('vendor')->index();

            // Display name is for the package owner to update should they want to
            // will default to name
            $table->string('display_name')->nullable();

            // As pulled from github
            $table->text('description')->nullable();

            // The github url 
            $table->text('repo_url')->nullable();

            // Official packages are those that are created by "laravel"
            $table->boolean('official')->default(false);

            // This will be the parsed readme contents
            $table->text('parsed_readme')->nullable();

            // Package misc
            $table->string('language')->nullable();
            $table->unsignedBigInteger('stars_count')->default(0);
            $table->dateTime('last_synced_at')->nullable()->default(now());

            // Hmm not using this, probably for NPM/Packagist
            $table->text('package_url')->nullable();

            // JSON encoded repo payload from github
            $table->json('meta')->nullable();
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('submitter_id')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('set null');
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
