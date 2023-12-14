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
        Schema::create('incidents', function (Blueprint $table) {
            $table->id();
            $table->string('ticket_no');
            $table->string('issue') -> nullable();
            $table->string('issue_type') -> nullable();
            $table->string('description') -> nullable();
            $table->string('reporter') -> nullable();
            $table->string('urgency') -> nullable();
            $table->string('statusCheck') -> nullable();
            $table->string('from') -> nullable();
            $table->string('assign_to')->nullable();
            $table->string('service_number');
            $table->string('reporter_name');
            $table->string('number');
            $table->string('technician_id') -> references('id') -> on('technicians');
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
        Schema::dropIfExists('incidents');
    }
};
