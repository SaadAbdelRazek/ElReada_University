<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('college_departments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('students_number')->unsigned()->nullable();
            $table->unsignedBigInteger('college_id');
            $table->unsignedBigInteger('head_id')->nullable();
            $table->year('established_at')->nullable();
            $table->text('description')->nullable();
            $table->text('vision')->nullable();
            $table->text('message')->nullable();
            $table->foreign('college_id')->references('id')->on('colleges')->onDelete('cascade');
            $table->foreign('head_id')->references('id')->on('branches_headers')->onDelete('cascade');
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
        Schema::dropIfExists('college_departments');
    }
};
