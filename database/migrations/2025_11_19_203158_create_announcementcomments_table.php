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
        Schema::create('announcementcomments', function (Blueprint $table) {
            $table->id();
$table->integer('announcements_id');
$table->integer('announcements_users_id');
$table->integer('users_id');
$table->longtext('comment');
$table->boolean('isTrash')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('announcementcomments');
    }
};
