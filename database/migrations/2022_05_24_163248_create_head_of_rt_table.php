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
        Schema::create('head_of_rt', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('rt_id')->nullable()->constrained('rt')->nullOnDelete();
            $table->foreignId('civilian_id')->nullable()->constrained('civilians')->nullOnDelete();
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
        Schema::dropIfExists('head_of_rt');
    }
};
