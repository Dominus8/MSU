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
        Schema::create('mainslides', function (Blueprint $table) {
            $table->id();
            $table->text("image_mine_slide");
            $table->text("b_title_mine_slide");
            $table->text("g_title_mine_slide");
            $table->text("subtitle_mine_slide");
            $table->text("link_mine_slide");
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
        Schema::dropIfExists('mainslides');
    }
};
