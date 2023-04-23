<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('parents', function (Blueprint $table) {
            $table->id();
            $table -> foreign('parent_id');
            $table->string('name', 100);
            $table-> longText('description')->nullable();
            $table-> boolean('activate')->default(true);
            $table-> timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('parents');
    }
};
