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
        Schema::create('primarycontacts', function (Blueprint $table) {
            $table->id();
            $table->string("prymary_contact_adress")->default('text')->nulable();
            $table->string("prymary_contact_mail")->default('text')->nulable();
            $table->string("prymary_contact_phone")->default('text')->nulable();
            $table->string("prymary_contact_image")->default('text')->nulable();
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
        Schema::dropIfExists('primarycontacts');
    }
};
