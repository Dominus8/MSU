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
        Schema::table('apphardlabels', function (Blueprint $table) {
            $table->text("apphardlable_subtitle")->default('text')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('apphardlabels', function (Blueprint $table) {
            $table->string("apphardlable_subtitle")->default('text')->change();
        });
    }
};
