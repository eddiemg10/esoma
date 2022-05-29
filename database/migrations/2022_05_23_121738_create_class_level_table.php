<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassLevelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_level', function (Blueprint $table) {
            $table->id();
            $table->foreignId('school_level_id')->constrained('school_level')->onUpdate('cascade')->onDelete('cascade');
            $table->string('classlevel_name');
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('class_level');
        Schema::enableForeignKeyConstraints();
    }
}
