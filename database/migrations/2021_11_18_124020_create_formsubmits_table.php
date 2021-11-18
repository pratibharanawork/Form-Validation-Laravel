<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsubmitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formsubmits', function (Blueprint $table) {
            $table->id();
            $table->string('name',40);
            $table->string('email',90);
            $table->string('subject',60);
            $table->string('message');
            $table->timestamp('date');
            $table->string('time');
            $table->string('fileupload');
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
        Schema::dropIfExists('formsubmits');
    }
}
