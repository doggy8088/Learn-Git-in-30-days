<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('sales', function (Blueprint $table) {
			$table->id();
			$table->bigInteger('customer_id');
			$table->string('receiver', 20);
			$table->string('destination', 100);
			$table->string('contact_tel', 20);
			$table->bigInteger('employee_id');
			$table->timestamp('sale_date');
			$table->string('sale_type', 1);
			$table->string('invoice_no', 20);
			$table->decimal('sub_total', 18, 2);
			$table->decimal('discount', 18, 2);
			$table->decimal('saletax', 18, 2);
			$table->string('ar_id', 20)->nullable();   //
			$table->decimal('paid', 18, 2);
			$table->string('pmt_id', 1)->nullable();    //
			$table->integer('delivery')->nullable();
			$table->string('sale_guid', 20);
			$table->string('mgmr', 20)->nullable();
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
		Schema::dropIfExists('sales');
	}
}