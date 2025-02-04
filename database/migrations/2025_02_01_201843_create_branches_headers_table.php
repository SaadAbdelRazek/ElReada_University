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
        Schema::create('branches_headers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('speech');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('branch_name');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->string('photo')->nullable();
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
        Schema::dropIfExists('branches_headers');
    }
};
