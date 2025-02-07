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
        Schema::table('prev_events', function (Blueprint $table) {
            $table->string('video')->nullable()->after('photo'); // Video path
            $table->date('date')->nullable()->after('video'); // Event date
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('prev_events', function (Blueprint $table) {
            $table->dropColumn(['video', 'date']);
        });
    }
};
