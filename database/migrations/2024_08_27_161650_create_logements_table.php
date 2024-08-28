<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogementsTable extends Migration
{
    public function up()
    {
        Schema::create('logements', function (Blueprint $table) {
            $table->id();
            $table->string('logement');
            $table->string('localite');
            $table->integer('chambres');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('logements');
    }
}

