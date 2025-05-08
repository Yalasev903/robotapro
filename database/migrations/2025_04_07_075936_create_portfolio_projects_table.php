<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('portfolio_projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('title')->nullable();        // Назва проєкту
            $table->text('description')->nullable();    // Опис
            $table->string('image');                    // Картинка
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('portfolio_projects');
    }
};
