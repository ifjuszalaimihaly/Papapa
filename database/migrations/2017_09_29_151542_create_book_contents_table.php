<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_contents', function (Blueprint $table) {
            $table->collation = 'utf8_general_mysql500_ci';
            $table->charset = 'utf8';
            $table->mediumIncrements('id');
            $table->unsignedSmallInteger('book_id');
            $table->unsignedSmallInteger('bible_translation_id');
            $table->unsignedSmallInteger('chapter');
            $table->mediumText('versicle')->collation('utf8_general_mysql500_ci');
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
        Schema::dropIfExists('book_contents');
    }
}
