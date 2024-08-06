<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('folder_accesses', function (Blueprint $table) {
            $table->id();
            $table->boolean('update')->default(0);
            $table->boolean('read')->default(0);
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('folder_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('folder_id')->references('id')->on('folders');
            $table->primary(['id', 'folder_id', 'user_id']);


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('folder_accesses');
    }
};
