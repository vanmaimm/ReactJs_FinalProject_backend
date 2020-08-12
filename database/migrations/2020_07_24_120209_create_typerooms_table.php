<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTyperoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('typerooms', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name')->charset('utf8mb4');
            $table->string('image', 5000);
            $table->string("area", 10);
            $table->double('price_per_day',10);
            $table->string('description', 5000)->default(null)->charset('utf8mb4');
            $table->integer("max_person");
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('typerooms');
    }
}
