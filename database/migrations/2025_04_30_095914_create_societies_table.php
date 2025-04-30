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
        Schema::create('societies', function (Blueprint $table) {
            $table->id();
            $table->char('id_card_number, 8');
            $table->string('password');
            $table->string('name');
            $table->date('bon_darte');
            $table->enum('gender', ['male', 'female']);
            $table->text('addreas');
            $table->foreignId('regional_id')->constrained();
            $table->text('login_tokens');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('societies');
    }
};
