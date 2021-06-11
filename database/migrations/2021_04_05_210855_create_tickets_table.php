<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('type_id')->nullable();
            $table->unsignedBigInteger('priority_id')->required();
            $table->unsignedBigInteger('requester_user_id')->required();
            $table->string('name')->required();
            $table->boolean('flag_status')->default(true);
            $table->timestamps();
            $table->unsignedBigInteger('created_by')->index();
            $table->unsignedBigInteger('updated_by')->index();
            $table->foreign('type_id')->references('id')->on('types')->onDelete('set null');
            $table->foreign('priority_id')->references('id')->on('priorities');
            $table->foreign('requester_user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
