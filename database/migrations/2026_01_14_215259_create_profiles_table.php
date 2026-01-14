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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
$table->string('firstname');
$table->string('lastname');
$table->string('gender');
$table->string('birthdate');
$table->string('phonenumber');
$table->string('address');
$table->string('mothersname');
$table->string('fathersname');
$table->string('emergency_contact');
$table->boolean('isTrash')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
