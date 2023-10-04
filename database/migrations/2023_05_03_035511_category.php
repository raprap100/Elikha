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
        Schema::create('category', function (Blueprint $table) {
            $table->id();
            $table->string("Category")->nullable();
        });
        DB::table('category')->insert([
            ['id' => 1, 'Category' => 'Pop Art'],
            ['id' => 2, 'Category' => 'Realism'],
            ['id' => 3, 'Category' => 'Portrait'],
            ['id' => 4, 'Category' => 'Abstract'],
            ['id' => 5, 'Category' => 'Expressionism'],
            ['id' => 6, 'Category' => 'Impressionism'],
            ['id' => 7, 'Category' => 'Photorealism'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category');
    }
};
