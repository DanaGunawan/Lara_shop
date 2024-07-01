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
        Schema::create('sub_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->string('name', 64);
            $table->string('slug', 255);
            $table->string('meta_title', 64);
            $table->text('meta_description');
            $table->string('meta_keywords', 64)->nullable();
            $table->string('status', 11)->default('Active');
            $table->boolean('is_deleted')->default(0);
            $table->date('created_at')->nullable();
            $table->string('created_by', 64);
            $table->date('updated_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_categories');
    }
};
