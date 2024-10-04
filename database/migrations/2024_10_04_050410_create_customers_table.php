<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id(); //integer primary key and Auto increment
            $table->string('name');
            $table->string('email',200)->unique();
            $table->bigInteger('mobile'); //9999999999
            $table->date('dob')->nullable();
            $table->string('password');
            $table->enum('gender',['M','F','O']);
            $table->text('address')->nullable();
            $table->boolean('status')->default('1')->comment('1-active 0-inactive');
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
        Schema::dropIfExists('customers');
    }
};
