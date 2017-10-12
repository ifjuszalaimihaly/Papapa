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
            $table->collation = 'utf8_general_mysql500_ci';
            $table->charset = 'utf8';
            $table->mediumIncrements('id');
            $table->unsignedSmallInteger('fest_group_id')->nullable()->index();
            $table->string('fest_name', 50)->collation('utf8_general_mysql500_ci')->index();
            $table->string('fest_name_another', 50)->nullable()->collate('utf8_general_mysql500_ci')->index();
            $table->string('fest_name_latin', 50)->nullable()->collate('utf8_general_mysql500_ci')->index();
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
