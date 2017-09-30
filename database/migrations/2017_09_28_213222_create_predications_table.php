<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePredicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('predications', function (Blueprint $table) {
            $table->increments('id',11);
            $table->integer('fest_id')->index();
            $table->integer('book_id')->index();
            $table->integer('chapter')->index();
            $table->integer('versicle_begin');
            $table->integer('versicle_end');
            $table->char('versicle_begin_letter',1)->nullable();
            $table->char('versicle_end_letter',1)->nullable();
            $table->mediumText('evangelization')->collate('utf8_general_mysql_500_ci');
            $table->date('written_at');
            $table->timestamps();

            $table->foreign('fest_id')->references('id')->on('fests');
            $table->foreign('book_id')->references('id')->on('books');
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('predications');
    }
}
