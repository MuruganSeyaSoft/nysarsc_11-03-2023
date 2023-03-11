<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembercheckoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('membercheckouts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullname')->nullable(); 
            $table->string('phone')->nullable();            
            $table->string('email')->nullable();            
            $table->string('billingname')->nullable();   
            $table->string('comments')->nullable();   
            $table->string('driving')->nullable(); 
            $table->integer('mem_id')->nullable();    
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
        Schema::dropIfExists('membercheckouts');
    }
}
