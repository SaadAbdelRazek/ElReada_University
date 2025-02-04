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
        Schema::create('deanships', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // اسم العمادة
            $table->string('deanship_header')->nullable();
            $table->string('deanship_header_speech')->nullable();
            $table->text('description')->nullable(); // وصف العمادة
            $table->string('email')->nullable(); // البريد الإلكتروني للعمادة
            $table->string('phone')->nullable(); // رقم الهاتف
            
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
        Schema::dropIfExists('_deanships');
    }
};
