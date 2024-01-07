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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('content');
            $table->boolean('validated');
            $table->unsignedBigInteger('category');
            $table->unsignedBigInteger('author_id');
            $table->unsignedBigInteger('validated_by');
            $table->date('validated_date');
            $table->timestamps();

            // Define the foreign key
            $table->foreign('author_id')->references('id')->on('users');
            $table->foreign('validated_by')->references('id')->on('users');
            $table->foreign('category')->references('id')->on('categories');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
