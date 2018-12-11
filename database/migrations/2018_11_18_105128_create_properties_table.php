<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('properties', function (Blueprint $table) {
			$table->increments('id');
			$table->string('title');
			$table->mediumText('excerpt')->nullable(); //extracto
			$table->text('detail')->nullable();
			$table->string('address')->nullable();
			$table->string('zone');
			$table->string('departamento')->nullable();
			$table->string('provincia')->nullable();
			$table->string('distrito')->nullable();
			$table->enum('operacion', ['alquiler', 'venta', 'alquiler-venta', 'traspaso'])->default('venta'); // captada - cancelada - transaccion - vendida
			$table->integer('price_contrato'); // for contractual
			$table->integer('comision')->nullable();
			$table->integer('price'); // for sale

			$table->integer('full-area');
			$table->integer('build-area');
			$table->boolean('isOnlyArea')->default(false);
			$table->integer('num_pisos')->default(1);

			$table->string('owner');
			$table->string('captador');
			$table->string('agent');
			$table->integer('cocheras');
			$table->integer('bathroon');
			$table->integer('bedroon');
			$table->string('financiamiento')->nullable();
			$table->boolean('featured')->default(false); // destacada
			$table->boolean('exclusive')->default(false);
			$table->string('status')->default('activa'); // activa - cancelada - transaccion-concluida
			$table->string('image')->default('property-defaul.jpg');
			$table->text('note-public')->nullable();
			$table->text('note-private')->nullable();

			$table->time('periodo-contato')->nullable();
			$table->softDeletes();
			$table->timestamp('startpublished_at')->nullable();
			$table->timestamp('startcontrato_at')->nullable();
			$table->timestamp('endcontrato_at')->nullable();

			//FK
			$table->integer('city_id')->unsigned()->nullable();
			$table->foreign('city_id')->references('id')->on('cities');

			$table->integer('category_id')->unsigned()->nullable();
			$table->foreign('category_id')->references('id')->on('categories');

			$table->timestamps();

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('properties');
	}
}
