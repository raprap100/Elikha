<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBidsTable extends Migration
{
    public function up()
    {
        Schema::create('bids', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('artwork_id')->constrained();
            $table->decimal('amount', 10, 2); // Change the data type and precision based on your requirements
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bids');
    }
}
