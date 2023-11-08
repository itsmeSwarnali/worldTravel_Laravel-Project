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
        Schema::create('booking_lists', function (Blueprint $table) {
            // column name
            $table->id();
            $table->string('UserName');
            $table->string('UserEmail');
            $table->string('UserConNum');
            $table->string('UserAddress');
            $table->string('BdDes')->nullable();
            $table->string('WorldDes')->nullable();
            $table->string('DepartDate');
            $table->string('UserBudget');
            $table->string('Member');
            $table->string('PassImage');
            $table->string('status');
            $table->string('UserMsg')->nullable();



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
        Schema::dropIfExists('booking_lists');
    }
};
