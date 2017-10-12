<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFestGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fest_groups', function (Blueprint $table) {
            $table->collation = 'utf8_general_mysql500_ci';
            $table->charset = 'utf8';
            $table->smallIncrements('id');
            $table->string('fest_group_name',15)->collation('utf8_general_mysql500_ci');
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
        Schema::dropIfExists('fest_groups');
    }
}
