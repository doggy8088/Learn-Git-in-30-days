<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromotionsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('promotions', function (Blueprint $table) {
			$table->id();
			$table->bigInteger('product_id');
			$table->dateTime('start_date');
			$table->dateTime('end_date');
			$table->decimal('sale_price', 18, 2);
			$table->text('remark')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('promotions');
	}
}