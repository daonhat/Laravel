<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBe extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::create("question",function($table){
           $table->increments("idq");
           $table->string("titleq");
           $table->timestamps();
        });
        Schema::create("answer",function($table){
            $table->increments("ida");
            $table->string("titlea");
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
		//
	}

}
