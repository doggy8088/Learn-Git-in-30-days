<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('customers', function (Blueprint $table) {
			$table->id();
			$table->string('cust_name_c', 50);
			$table->string('cust_name_e', 50)->nullable();
			$table->string('ear_no', 20);
			$table->bigInteger('cust_eid');    //
			$table->string('contact', 20);
			$table->date('birth')->nullable();
			$table->char('gender', 1);
			$table->string('addr', 250);
			$table->string('addr2', 250)->nullable();
			$table->string('cust_tel', 20);
			$table->string('cust_email', 50);
			$table->string('memstate')->nullable();
			$table->string('userid', 50)->nullable();
			$table->string('pwd', 100)->nullable();
			$table->string('bank', 3)->nullable();
			$table->string('acct', 20)->nullable();
			$table->string('acc_group', 10)->nullable();
			$table->string('ac_sub', 20)->nullable();
			$table->string('valid_code', 50)->nullable();
			$table->boolean('validated')->default(false);
			$table->dateTime('lastpuchasedate')->nullable();
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
		Schema::dropIfExists('customers');
	}
}