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
    Schema::create("videos", function (Blueprint $table) {
      $table->id();
      $table->timestamps();
      $table->string("cover_image_url");
      $table->string("video_description");
      $table->unsignedBigInteger("duration");
      $table->string("embed_link");
      $table->string("storage_link");

      $table
        ->foreignUuid("users_id")
        ->nullable(false)
        ->constrained()
        ->cascadeOnUpdate()
        ->cascadeOnDelete();
      $table
        ->foreignUuid("categories_id")
        ->nullable(false)
        ->constrained()
        ->cascadeOnUpdate()
        ->cascadeOnDelete();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists("videos");
  }
};
