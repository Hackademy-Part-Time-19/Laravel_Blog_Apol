<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->string('image')->after('id')->nullable();
            $table->string('title')->after('image');
            $table->string('categoria')->after('title');
            $table->text('description')->after('categoria');
        });
    }


    public function down(): void
    {
        Schema::table('articles', function (Blueprint $table) {
        });
    }
};
