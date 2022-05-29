<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUploadeddocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uploadeddocs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('classroom_id')->contrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('doc');
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
        Schema::dropIfExists('uploadeddocs');
    }
}
