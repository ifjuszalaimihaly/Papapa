<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFestAlternativeNamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fest_alternative_names', function (Blueprint $table) {
            $table->collation = 'utf8_general_mysql500_ci';
            $table->charset = 'utf8';
            $table->smallIncrements('id');
            $table->unsignedMediumInteger('fest_predication_id');
            $table->string('fest_alternative_name',100)->collation('utf8_general_mysql500_ci');
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
        Schema::dropIfExists('fest_alternative_names');
    }
}
