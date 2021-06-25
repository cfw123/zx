<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cases', function (Blueprint $table) {
            $table->increments('id');
            $table->string('case_name',64)->comment('案例名称');
            $table->integer('designer_id')->index()->unsigned()->comment('设计师id || 施工工长id');
            $table->string('case_style',64)->comment('案例风格');
            $table->string('case_type',64)->comment('案例户型');
            $table->string('case_area',64)->comment('案例面积');
            $table->string('case_site',64)->comment('案例楼盘');
            $table->string('is_rem',8)->default('T')->comment('是否推荐');
            $table->string('is_hidden',8)->default('F');
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
        Schema::dropIfExists('cases');
    }
}
