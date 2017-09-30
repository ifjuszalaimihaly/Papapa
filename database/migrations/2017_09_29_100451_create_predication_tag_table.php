<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePredicationTagTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('predication_tag', function (Blueprint $table) {
      $table->increments('id',11);
      $table->integer('predication_id');
      $table->smallInteger('tag_id');
      $table->timestamps();

      $table->unique(['predication_id', 'tag_id']);
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::dropIfExists('predication_tag');
  }
}
