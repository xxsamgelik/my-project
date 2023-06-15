<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('user_information', function (Blueprint $table) {
            $table->id();
            $table->string('sex');
            $table->date('date_birthday')->nullable();
            $table->string('status');
            $table->unsignedBigInteger("user_id");
            $table->timestamps();
            $table->string('country');
            $table->foreign("user_id")->references("id")->on("users")->cascadeOnDelete();
        });

    }

public function down(): void
    {
        Schema::dropIfExists('user_information');
    }
};
