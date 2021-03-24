<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employes', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('employe_id')->nullable();
            $table->string('image')->nullable();
            $table->integer('designation')->nullable();
            $table->integer('department')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('or_mobile')->nullable();
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('employes');
    }
}
