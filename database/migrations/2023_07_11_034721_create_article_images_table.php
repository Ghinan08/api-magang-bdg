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
        Schema::create('table_article_image', function (Blueprint $table) {
            $table->id();
            $table->integer('article_id');
            $table->text('image');
            $table->timestamps();
            $table->enum('deleted', ['0', '1']);

            
            // $table->foreign('article_id')->references('id')->on('articles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article_images');
    }
};
