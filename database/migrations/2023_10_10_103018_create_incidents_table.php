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
        Schema::create('technicians', function (Blueprint $table) {
            $table->id() -> unique();
            $table->string('name');
            $table->string('number');
            $table->string('email');
            $table->string('service_number');
            $table->string('status') -> nullable();
            $table->string('cell');
            $table->timestamps();
        });

        Schema::create('incidents', function (Blueprint $table) {
            $table->id();
            $table->string('ticket_no');
            $table->string('issue')->nullable();
            $table->string('issue_type')->nullable();
            $table->string('description')->nullable();
            $table->string('reported_by')->nullable();
            $table->string('urgency')->nullable();
            $table->string('statusCheck')->nullable();
            $table->string('from')->nullable();
            $table->string('service_number');
            $table->string('reporter_name');
            $table->string('number');
            $table->unsignedBigInteger('technician_id')->nullable();
            $table->foreign('technician_id')->references('id')->on('technicians')->onDelete('cascade');
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
        Schema::dropIfExists('techincians');
        Schema::dropIfExists('incidents');
    }
};
