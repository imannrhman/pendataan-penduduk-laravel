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
        Schema::create('family_members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nik')->unique('nik');
            $table->string('full_name');
            $table->char('gender', 1);
            $table->date('date_of_birth');
            $table->foreignId('birthplace_id')->nullable()->constrained('religions')->nullOnDelete();
            $table->foreignId('religion_id')->nullable()->constrained('religions')->nullOnDelete();
            $table->foreignId('education_id')->nullable()->constrained('education')->nullOnDelete();
            $table->foreignId('profession_id')->nullable()->constrained('professions')->nullOnDelete();
            $table->foreignId('marital_status_id')->nullable()->constrained('marital_statuses')->nullOnDelete();
            $table->foreignId('family_status_id')->nullable()->constrained('family_statuses')->nullOnDelete();
            $table->string('parent_name');
            $table->char('citizenship',3);
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
        Schema::dropIfExists('family_members');
    }
};
