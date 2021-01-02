<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('order_id')->unsigned();
            $table->string('order_status')->nullable();
            $table->integer('entrepreneur_id')->unsigned()->nullable();
            $table->foreign('entrepreneur_id')->references('id')->on('users')->onDelete('restrict');
            $table->integer('grand_total');
            $table->string('currency',3);
            $table->rememberToken();
            $table->timestamps();
        });
        DB::statement("ALTER TABLE orders AUTO_INCREMENT = 700001;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            //
        });
    }
}
