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
            $table->string('issue') -> nullable();
            $table->string('issue_type') -> nullable();
            $table->string('description') -> nullable();
            $table->string('reporter') -> nullable();
            $table->string('urgency') -> nullable();
            $table->string('statusCheck') -> nullable();
            $table->string('from') -> nullable();
            $table->string('assigne_to')->nullable();
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
