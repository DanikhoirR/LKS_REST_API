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
            $table->string('id_card_number')->unique();
            $table->string('password');
            $table->string('name');
            $table->date('born');
            $table->enum('gender', ['male', 'female']);
            $table->text('address');
            $table->bigInteger('regional_id')->unsigned();
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
