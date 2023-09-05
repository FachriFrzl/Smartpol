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
        Schema::create('anggotas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('NIK');
            $table->string('birth_place');
            $table->date('birth_date');
            $table->text('alamat');
            $table->bigInt('province_id');
            $table->bigInt('regencies_id');
            $table->bigInt('districts_id');
            $table->bigInt('villages_id');
            $table->string('rt');
            $table->string('rw');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggotas');
    }
};
