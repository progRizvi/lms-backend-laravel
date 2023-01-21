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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained("users");
            $table->text("image")->nullable();
            $table->string("mobile", 20)->nullable();
            $table->text("address")->nullable();
            $table->string("education");
            $table->json("social_handle")->nullable();
            $table->text("about")->nullable();
            $table->text("achievement")->nullable();
            $table->text("objective")->nullable();
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
        Schema::dropIfExists('teachers');
    }
};