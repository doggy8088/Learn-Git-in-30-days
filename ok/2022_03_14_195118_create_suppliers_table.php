<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('suppliers', function (Blueprint $table) {
			$table->id();
			$table->string('supp_name_c', 50);
			$table->string('supp_name_e', 50)->nullable();
			$table->string('ear_no', 20);
			$table->string('supp_addr', 250);
			$table->string('inv_addr', 250);
			$table->string('supp_tel', 20);
			$table->string('supp_contact', 20);
			$table->string('supp_email', 50);
			$table->string('supp_owner', 20);
			$table->date('contract_start');
			$table->date('contract_end')->nullable();
			$table->string('userid', 50);
			$table->string('pwd', 100);
			$table->string('valid_code', 50)->nullable();
			$table->date('latestreceiptdate')->nullable();
			$table->integer('status');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('suppliers');
	}
}
