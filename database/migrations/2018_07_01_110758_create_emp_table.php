<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emp', function (Blueprint $table) {
            $table->increments('empno');
            $table->string('ename');
            $table->string('job');
            $table->string('hiredate');
            $table->integer('sal');
            $table->integer('comm');
            $table->unsignedinteger('deptno')->nullable();
            $table->unsignedinteger('mgr')->nullable();

            $table->foreign('deptno')->references('deptno')->on('dept');
            $table->foreign('mgr')->references('empno')->on('emp');
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
        Schema::dropIfExists('emp');
    }
}
