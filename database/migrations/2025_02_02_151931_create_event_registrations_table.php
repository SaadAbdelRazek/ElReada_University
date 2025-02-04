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
        Schema::create('event_registrations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('event_id');
            $table->string('name');
            $table->integer('age');
            $table->string('country');
            $table->string('mail')->unique();
            $table->string('phone');
            $table->enum('gender', ['Male', 'Female', 'Other']);
            $table->enum('participation_type', ['Speaker', 'Attendee', 'Volunteer', 'Sponsor']);
            $table->enum('how_did_you_know', ['Social Media', 'Friends', 'University Website', 'Advertisement', 'Other']);
            $table->timestamps();

            // Foreign key reference
            $table->foreign('event_id')->references('id')->on('next_events')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_registrations');
    }
};
