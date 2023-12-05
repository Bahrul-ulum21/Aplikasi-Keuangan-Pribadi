<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('date');
            $table->unsignedDecimal('amount', 12);
            $table->boolean('in_out')->unsigned();
            $table->string('description');
            $table->unsignedInteger('category_id')->nullable();
            $table->unsignedInteger('creator_id');// tabel untuk kode user (id)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_transactions');
    }
}