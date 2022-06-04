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
        Schema::create('civilians', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nik')->unique('nik');
            $table->string('full_name');
            $table->date('date_of_birth')->nullable();
            $table->char('gender', 1)->nullable();
            $table->string('blood_type', 2)->nullable();
            $table->foreignId('birthplace_id')->nullable()->constrained('birthplaces')->nullOnDelete();
            $table->foreignId('religion_id')->nullable()->constrained('religions')->nullOnDelete();
            $table->foreignId('education_id')->nullable()->constrained('education')->nullOnDelete();
            $table->foreignId('profession_id')->nullable()->constrained('professions')->nullOnDelete();
            $table->date('wedding_date')->nullable();
            $table->foreignId('marital_status_id')->nullable()->constrained('marital_statuses')->nullOnDelete();
            $table->foreignId('family_status_id')->nullable()->constrained('family_statuses')->nullOnDelete();
            $table->string('no_paspor')->nullable();
            $table->string('no_kitap')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->char('citizenship', 3)->nullable();
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
        Schema::dropIfExists('civilians');
    }
};
