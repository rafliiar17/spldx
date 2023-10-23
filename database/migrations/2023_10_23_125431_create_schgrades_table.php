<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('schgrades', function (Blueprint $table) {
            $table->id();
            $table->string('SchGrade',5);
            $table->string('SchClass',12);
            $table->enum('SchStatus',[0,1,99])->default(1);
            $table->timestamps();   
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schgrades');
    }
};
