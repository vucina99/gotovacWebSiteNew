<?php

use App\Models\BlogCategory;
use App\Models\BlogImage;
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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string("title_sr");
            $table->longText("content_sr");
            $table->mediumText("part_content_sr")->nullable();
            $table->string("title_en");
            $table->longText("content_en");
            $table->mediumText("part_content_en")->nullable();
            $table->string("slug_sr");
            $table->string("slug_en");
            $table->string("meta_description");
            $table->string("meta_keywords");
            $table->string("meta_title");
            $table->boolean("is_active")->default(false);
            $table->dateTime("date");
            $table->foreignIdFor(BlogCategory::class);
            $table->foreignIdFor(BlogImage::class);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
