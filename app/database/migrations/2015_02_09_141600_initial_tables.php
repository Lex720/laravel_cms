<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InitialTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        
		Schema::create('sections', function (Blueprint $table) {

			$table->increments('id');

			$table->string('name');
			$table->string('slug_url');
			$table->string('type');
			$table->boolean('status')->default(false);

			$table->timestamps(); //created_at, update_at
			$table->softDeletes(); //delete_at

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sections');
		Schema::drop('users');
	}

}
