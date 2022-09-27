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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->text("thumbnail_project");
            $table->text("image_project")->nullable();
            $table->text("b_title_project");
            $table->text("g_title_project");
            $table->text("subtitle_project");
            $table->text("full_text_project");
            $table->text("links_to_send")->nullable();
            $table->text("document_project")->nullable();
            $table->text("description_project")->nullable();
            $table->text("keywords_project")->nullable();
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
        Schema::dropIfExists('projects');
    }
};
