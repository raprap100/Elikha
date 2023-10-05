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
        Schema::create('idtypes', function (Blueprint $table) {
            $table->id();
            $table->string("IDType")->nullable();
        });
        DB::table('idtypes')->insert([
            ['id' => 1, 'IDType' => 'Passport'],
            ['id' => 2, 'IDType' => 'NationalID'],
            ['id' => 3, 'IDType' => 'Social Security Service ID'],
            ['id' => 4, 'IDType' => 'Government Service Insurance Systeme-Card'],
            ['id' => 5, 'IDType' => 'Driver’s license'],
            ['id' => 6, 'IDType' => 'Firearms’ License to Own and Possess ID'],
            ['id' => 7, 'IDType' => 'Police clearance'],
            ['id' => 8, 'IDType' => 'Firearms’ License to Own and Possess ID'],
            ['id' => 9, 'IDType' => 'Professional Regulation Commission ID'],
            ['id' => 10, 'IDType' => 'Integrated Bar of the Philippines ID'],
            ['id' => 11, 'IDType' => 'Overseas Workers Welfare Administration ID'],
            ['id' => 12, 'IDType' => 'Bureau of Internal Revenue ID'],
            ['id' => 13, 'IDType' => 'Voter’s ID'],
            ['id' => 14, 'IDType' => 'Senior citizen’s card'],
            ['id' => 15, 'IDType' => 'Unified Multi-purpose Identification Card'],
            ['id' => 16, 'IDType' => 'Other government-issued ID with photo'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
