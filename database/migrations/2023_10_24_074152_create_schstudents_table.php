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
        Schema::create('schstudents', function (Blueprint $table) {
            $table->id();
            $table->string('StudentNisn',16);
            $table->string('StudentNis',16);
            $table->string('StudentFname',64);
            $table->string('StudentLname',64);
            $table->enum('StudentGender',['M','F']);
            $table->enum('StudentReligion',[1,2,3,4,5,6]);
            $table->string('StudentPob',64);
            $table->date('StudentDob');
            $table->string('StudentAddress',120);
            $table->string('StudentVillage',60);
            $table->string('StudentSubdistrict',60);
            $table->string('StudentDistrict',60);
            $table->string('StudentProvince',60);
            $table->string('StudentEmail',64);
            $table->string('StudentWhatsapp',64);
            $table->foreignId('schgrades_id')->constrained()->nullable();
            $table->enum('StudentStatus',[0,1,99])->default(1);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schstudents');
    }
};
