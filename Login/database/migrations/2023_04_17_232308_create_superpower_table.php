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
        Schema::create('superpower', function (Blueprint $table) {
            $table->id();
            $table -> foreign('user_id');
            $table->string('name', 100);
            $table-> longText('description')->nullable();
            $table-> boolean('activate')->default(true);
            $table-> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('superpower');
    }
};
