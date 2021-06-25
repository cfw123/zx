<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesignersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('designers', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('cate')->comment('类别 0设计师||1工长');;
            $table->string('designer_name',128)->comment('姓名');
            $table->string('designer_phone',128)->comment('电话');
            $table->string('style',128)->comment('擅长风格');
            $table->string('job',128)->comment('职称');
            $table->tinyInteger('year')->comment('从业年限');
            $table->tinyInteger('rank')->comment('评价');
            $table->Integer('popular')->comment('人气');
            $table->string('des')->comment('理念');

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
        Schema::dropIfExists('designers');
    }
}
