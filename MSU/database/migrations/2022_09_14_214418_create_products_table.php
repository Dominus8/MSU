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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("product_type");
            $table->string("single_page_bico");
            $table->string("single_page_gico");
            $table->string("nav_title");
            $table->string("b_single_page_title");
            $table->string("g_single_page_title");
            $table->text("single_page_slides");
            $table->text("single_page_sudtitle");
            $table->text("single_page_purpose");
            $table->text("single_page_parameters");
            $table->text("single_page_documents");
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
        Schema::dropIfExists('products');
    }
};
