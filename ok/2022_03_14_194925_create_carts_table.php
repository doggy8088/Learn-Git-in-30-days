<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('carts', function (Blueprint $table) {
			$table->id();
			$table->string('lot_id', 20);
			$table->bigInteger('customer_id');
			$table->bigInteger('product_id');
			$table->string('prod_nm', 50);
			$table->decimal('unit_price', 18, 2)->default(0);
			$table->integer('prod_qty')->default(0);
			$table->timestamp('shop_date')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('carts');
	}
}