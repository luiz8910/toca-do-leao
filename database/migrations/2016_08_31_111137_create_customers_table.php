<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customers', function(Blueprint $table) {
            $table->increments('id');
			$table->string('name');
			$table->string('cpf');
			$table->string('rg');
			$table->date('dateBirth');
			$table->string('barCode');
			$table->string('planB');
			$table->decimal('currentBalance');
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
		Schema::drop('customers');
	}

}
