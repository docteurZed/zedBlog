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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->enum('type', ['article', 'video', 'audio']);
            $table->string('title');
            $table->string('slug');
            $table->text('resume')->nullable();
            $table->longText('content')->nullable();
            $table->string('image')->nullable();
            $table->enum('status', ['draft', 'published', 'archived'])->default('draft');
            $table->string('media_url')->nullable();
            $table->dateTime('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
