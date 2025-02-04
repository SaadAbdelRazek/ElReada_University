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
        Schema::create('university_administrative_units', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('unit_header')->nullable();
            $table->string('unit_header_speech')->nullable();
            $table->text('description');
            $table->string('email')->nullable(); // البريد الإلكتروني للعمادة
            $table->string('phone')->nullable(); // رقم الهاتف
            $table->foreignId('deanship_id')->nullable()->constrained('deanships')->onDelete('set null'); // العميد المسؤول
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
        Schema::dropIfExists('university_administrative_units');
    }
};
