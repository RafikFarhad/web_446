<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PivotForExamStudents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_team', function (Blueprint $table) {
            $table->integer('exam_id')->unsigned();
            $table->integer('team_id')->unsigned();
            
            $table->foreign('team_id')->references('id')->on('teams')
                ->onDelete('cascade')
                ->onUpdate('cascade');
//            $table->foreign('course_id')->references('id')->on('courses')
//                ->onDelete('cascade')
//                ->onUpdate('cascade');
            $table->foreign('exam_id')->references('id')->on('exams')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->integer('mark')->default(0);
            $table->primary(['exam_id', 'team_id']);
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
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('exam_team');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
