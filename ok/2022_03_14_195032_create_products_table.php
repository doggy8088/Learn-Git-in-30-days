<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('products', function (Blueprint $table) {
			$table->id();
			$table->string('prod_name_c', 50);
			$table->string('prod_name_e', 50)->nullable();
			$table->string('unit', 20);
			$table->string('itm_code', 20);
			$table->bigInteger('supplier_id');
			$table->string('prod_id_in_supp', 20)->nullable();
			$table->bigInteger('category_id');
			$table->integer('prod_min')->nullable();
			$table->decimal('cost', 18, 2);
			$table->decimal('unit_price', 18, 2);
			$table->integer('stk_qty')->default(0);
			$table->string('status', 10)->nullable('none');
			$table->timestamp('latestreceiptdate')->nullable();
			$table->timestamp('latestdeliverydate')->nullable();
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
		Schema::dropIfExists('products');
	}
}