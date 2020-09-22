<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->integer('siteid');
          $table->string('status', 255);
          $table->string('title', 255);
          $table->string('type', 255);
          $table->integer('parentid');
          $table->integer('version');
          $table->boolean('active');
          $table->string('filepath', 255);
          $table->longText('filecontent');
          $table->string('setting')->nullable();
          $table->string('scheduleaction', 255);
          $table->dateTime('scheduledate');
          $table->string('sourcepageid', 255);
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
        Schema::dropIfExists('pages');
    }
}
