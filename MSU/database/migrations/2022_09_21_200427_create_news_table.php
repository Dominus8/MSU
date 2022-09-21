<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->text("thumbnail_news");
            $table->text("image_news")->nullable();
            $table->text("b_title_news");
            $table->text("g_title_news");
            $table->text("subtitle_news");
            $table->text("top_text_news")->nullable();
            $table->text("bottom_text_news")->nullable();
            $table->text("elink_text_news")->nullable();
            $table->text("elink_link_news")->nullable();
            $table->text("description_news")->nullable();
            $table->text("keywords_news")->nullable();
            $table->date("date_news");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
};
