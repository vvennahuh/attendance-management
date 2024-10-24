<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rest', function (Blueprint $table) {
            $table->id();
            $table->datetime('start-time');
            $table->datetime('end-time')->nullable();
            $table->foreignId('time_id')->constrained()->cascadeOnDelete();
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
        Schema::table('rest', function (Blueprint $table) {
            $table->dropForeign(['time_id']);
        });
        Schema::dropIfExists('rest');
    }
}
