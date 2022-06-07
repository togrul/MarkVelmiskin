<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('body')->nullable();
            $table->text('image')->nullable();
            $table->string('timeline')->nullable();
            $table->string('client')->nullable();
            $table->string('expertise')->nullable();
            $table->string('platform')->nullable();
            $table->text('about')->nullable();
            $table->text('goals')->nullable();
            $table->boolean('is_mobile')->default(0);
            $table->text('image_list')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
