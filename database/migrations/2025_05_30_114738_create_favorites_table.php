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
        Schema::create('favorites', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable(); // or 'client_id' if applicable
            $table->morphs('favoritable'); // creates 'favoritable_id' and 'favoritable_type'
            $table->timestamps();

            // Add indexes for performance
            $table->index(['user_id']);
            $table->index(['favoritable_type', 'favoritable_id']);

            // Optional foreign key constraint (if users table exists and you want cascade)
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('favorites');
    }
};
