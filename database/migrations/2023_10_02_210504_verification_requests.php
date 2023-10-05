<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('verification_requests', function (Blueprint $table) {
            $table->id();
            $table->string('identification');
            $table->string('selfie');
            $table->string('gcash');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->string('nationality');
            $table->dateTime('birthday');
            $table->string('address');
            $table->string('gender_id');
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('idtype_id'); 
            $table->foreign('idtype_id')->references('id')->on('idtypes')->onDelete('cascade');
            $table->unsignedBigInteger('age');
            $table->string('phonenumber');
            $table->text('remarks')->nullable();
            $table->enum('status', ['Pending', 'Approved',])->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       
    }
};
