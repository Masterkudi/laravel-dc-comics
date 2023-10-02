<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
// use Resources\Views\Comics\Index;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();

            $table->string("title", 100);
            $table->string("image");
            $table->text("description")->nullable();
            $table->integer("price");
            $table->string("series");
            $table->dateTime("sale_date");
            $table->string("type");
            // $table->string("artists", 255);
            // $table->string("writers", 255);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
