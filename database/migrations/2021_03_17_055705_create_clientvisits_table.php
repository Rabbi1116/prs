<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientvisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientvisits', function (Blueprint $table) {
            $table->id();
            $table->integer('companycategory_id');
            $table->string('company_name')->nullable();
            $table->string('client_name')->nullable();
            $table->string('client_designation')->nullable();
            $table->integer('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('office_address')->nullable();
            $table->string('file_path')->nullable();
            $table->integer('product_id');
            $table->integer('meeting_date');
            $table->string('comment')->nullable();
            $table->string('description')->nullable();
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('clientvisits');
    }
}
