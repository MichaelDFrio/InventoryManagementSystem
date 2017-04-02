<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCheckoutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('checkout', function (Blueprint $table) {
          $table->increments('co_id');
          $table->integer('u_id');
          $table->integer('inv_id');
          $table->date('pickup_date');
          $table->date('established_return_date');
          $table->integer('quantity');
          $table->date('actual_return_date');
          $table->integer('status');
          $table->string('condition');
          $table->text('comments');
          $table->integer('cetl_user_auth');
          $table->integer('cetl_user_check_in');
      });

      Schema::table('checkout', function(Blueprint $table){
        $table->foreign('u_id')->references('id')->on('users');
        $table->foreign('inv_id')->references('inv_id')->on('inventory');
        $table->foreign('cetl_user_auth')->references('id')->on('users');
        $table->foreign('cetl_user_check_in')->references('id')->on('users');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('checkout');
    }
}
