<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {  
            Schema::create('rooms', function (Blueprint $table) {
                $table->id()->autoIncrement();
                $table->string('room_number', 55);
                $table->string('image', 5000);
                $table->unsignedBigInteger('typeroom');
                $table->string("area", 10);
                $table->double('price_per_day',10);
                $table->string('description', 5000)->default(null)->charset('utf8mb4'); 
                $table->integer("max_person");
                $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
                $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
                $table->foreign('typeroom')->references('id')->on('typerooms')->onDelete('cascade');;
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
