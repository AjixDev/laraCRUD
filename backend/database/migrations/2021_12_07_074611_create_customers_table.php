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
            $table->string('SSN');
            $table->string('name');
            $table->string('slug');
            $table->date('DOB');
            $table->string('sex');
            $table->integer('phone1');
            $table->integer('phone2')->nullable();
            $table->integer('phone3')->nullable();
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
