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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('slug',50)->unique();
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->text('description');
            $table->string('status',10)->nullable()->default('In corso'); /* (in corso, completato, sospeso, etc.) */
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
        Schema::dropIfExists('projects');
    }
};
