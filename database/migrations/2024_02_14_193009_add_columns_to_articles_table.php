<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->string('title')->after('id');
            $table->text('description')->after('title');
            $table->string('categoria')->after('description');
            $table->boolean('active')->after('categoria')->nullable();
            $table->timestamp('added_at')->nullable();
            $table->text('image');
        });
    }


    public function down(): void
    {
        Schema::table('articles', function (Blueprint $table) {
        });
    }
};
