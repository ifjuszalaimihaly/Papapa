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
            $table->collation = 'utf8_general_mysql500_ci';
            $table->charset = 'utf8';
            $table->mediumIncrements('id');
            $table->unsignedSmallInteger('book_id');
            $table->unsignedSmallInteger('chapter');
            $table->unsignedSmallInteger('versicle_begin');
            $table->unsignedSmallInteger('versicle_end');
            $table->char('versicle_begin_letter',1)->nullable();
            $table->char('versicle_end_letter',1)->nullable();
            $table->mediumText('evangelization')->collation('utf8_general_mysql500_ci');
            $table->boolean('visible')->default(false);
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
        Schema::dropIfExists('predications');
    }
}
