<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('predication',function (Blueprint $table){
            $table->foreign('book_id')->references('id')->on('books');
        });
        Schema::table('books',function (Blueprint $table){
            $table->foreign('testament_id')->references('id')->on('testaments');
        });
        Schema::table('fests',function (Blueprint $table){
            $table->foreign('fest_group_id')->references('id')->on('fest_groups');
        });
        Schema::table('predication_tag',function (Blueprint $table){
            $table->foreign('tag_id')->references('id')->on('tags');
            $table->foreign('predication_id')->references('id')->on('predication');
        });
        Schema::table('book_contents',function (Blueprint $table){
            $table->foreign('book_id')->references('id')->on('books');
            $table->foreign('bible_translation_id')->references('id')->on('bible_translations');
        });
        Schema::table('fest_predication',function (Blueprint $table){
            $table->foreign('predication_id')->references('id')->on('predication');
            $table->foreign('fest_id')->references('id')->on('fests');
        });
        Schema::table('fest_alternative_names',function (Blueprint $table){
            $table->foreign('fest_predication_id')->references('id')->on('fest_predication');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('predication',function (Blueprint $table){
            $table->dropForeign(['book_id']);
        });
        Schema::table('books', function (Blueprint $table){
           $table->dropForeign(['testament_id']);
        });
        Schema::table('fests',function (Blueprint $table){
            $table->dropForeign(['fest_group_id']);
        });
        Schema::table('predication_tag',function (Blueprint $table){
            $table->dropForeign(['tag_id']);
            $table->dropForeign(['predication_id']);
        });
        Schema::table('book_contents',function (Blueprint $table){
            $table->dropForeign(['book_id']);
            $table->dropForeign(['bible_translation_id']);
        });
        Schema::table('fest_predication',function (Blueprint $table){
            $table->dropForeign(['predication_id']);
            $table->dropForeign(['fest_id']);
        });
        Schema::table('fest_alternative_names',function (Blueprint $table){
            $table->dropForeign(['fest_predication_id']);
        });
    }
}
