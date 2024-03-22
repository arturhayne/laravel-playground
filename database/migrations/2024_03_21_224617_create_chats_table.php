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
        Schema::create('chats', function (Blueprint $table) {
            $table->id();
            $table->string('reference_id')->unique()->index();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->enum('status',['waiting','in_progress','closed', 'closed_by_agent', 'closed_by_inactivity']);
            $table->dateTime('started_at')->nullable();
            $table->dateTime('closed_at')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chats');
    }
};
