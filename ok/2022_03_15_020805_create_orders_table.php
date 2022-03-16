<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('orders', function (Blueprint $table) {
			$table->id();
			$table->bigInteger('customer_id');
			$table->char('order_type', 1);
			$table->bigInteger('employee_id');
			$table->string('email', 50);
			$table->string('receiver', 20);
			$table->string('ship_addr', 100);
			$table->decimal('total', 18, 2);
			$table->decimal('salestax', 18, 2);
			$table->decimal('amt', 18, 2);
			$table->bigInteger('payment_id');
			$table->bigInteger('shipping_id');
			$table->string('order_guid', 20);
			$table->integer('validation');
			$table->integer('closed');
			$table->string('mgmr', 20);
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
		Schema::dropIfExists('orders');
	}
}