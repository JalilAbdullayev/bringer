<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('settings', function(Blueprint $table) {
            $table->id();
            $table->json('title');
            $table->json('author');
            $table->string('favicon');
            $table->string('logo');
            $table->json('description');
            $table->json('keywords');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void {
        Schema::dropIfExists('settings');
    }
};
