<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('stocks', function (Blueprint $table) {
			$table->id();
			$table->integer('capacity');
			$table->integer('cur_temp')->default(25);
			$table->integer('temp_hi')->default(40);;
			$table->integer('temp_lo')->default(0);;
			$table->integer('cur_moist')->default(60);;
			$table->integer('moist_hi')->default(100);;
			$table->integer('moist_lo')->default(30);;
			$table->string('email', 50);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('stocks');
	}
}
