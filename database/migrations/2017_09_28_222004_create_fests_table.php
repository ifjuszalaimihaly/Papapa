<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fests', function (Blueprint $table) {
            $table->increments('id',11);
            $table->integer('fest_group_id')->index();
            $table->string('fest_name', 50)->collate('utf8_general_mysql_500_ci');
            $table->string('fest_name_another', 50)->nullable()->collate('utf8_general_mysql_500_ci');
            $table->string('fest_name_latin', 50)->nullable()->collate('utf8_general_mysql_500_ci');
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
        Schema::dropIfExists('fests');
    }
}
