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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained();
            $table->string('name');
            $table->string('username')->nullable()->unique();
            $table->string('email')->unique();
            $table->integer('nif')->nullable()->unique();
            $table->integer('phone')->nullable()->unique();
            $table->string('iban')->nullable()->unique();
            $table->string('bank')->nullable();
            $table->string('swift')->nullable()->unique();
            $table->string('address')->nullable();
            $table->text('description')->nullable();
            $table->string('profile')->nullable();
            $table->string('position')->nullable();
            $table->string('role')->nullable();
            $table->string('picture')->nullable();
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
        Schema::dropIfExists('people');
    }
};
