<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdhistoriesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('prodhistories', function (Blueprint $table) {
			$table->id();
			$table->bigInteger('product_id');
			$table->bigInteger('employee_id');
			$table->decimal('old_cost', 18, 2);
			$table->decimal('new_cost', 18, 2);
			$table->decimal('old_price', 18, 2);
			$table->decimal('new_price', 18, 2);
			$table->integer('old_state');
			$table->integer('new_state');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('prodhistories');
	}
}