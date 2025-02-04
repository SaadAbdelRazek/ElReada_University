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
        Schema::create('colleges', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // $table->foreignId('dean_id')->constrained()->onDelete('cascade');
            // $table->foreignId('university_id')->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('dean_id')->nullable();
            $table->unsignedBigInteger('university_id');
            $table->year('established_at')->nullable();
            $table->text('description')->nullable();
            $table->string('logo')->nullable();
            $table->string('vision')->nullable();
            $table->string('message')->nullable();
            $table->foreign('dean_id')->references('id')->on('colleges_deans')->onDelete('cascade');
            $table->foreign('university_id')->references('id')->on('universities')->onDelete('cascade');
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
        Schema::dropIfExists('colleges');
    }
};
