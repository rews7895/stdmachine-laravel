<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * 권한 테이블 생성
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->tinyInteger('id')->unsigned()->comment('권한 레벨');
            $table->string('role_name', 255)->comment('권한명');
            $table->timestamps();
            $table->primary('id');
            $table->comment('권한 테이블');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
};