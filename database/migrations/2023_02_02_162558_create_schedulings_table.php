<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedulings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('employee_id');
            $table->date('date');
            $table->dateTime('start_time')->nullable();
            $table->dateTime('end_time')->nullable();
            $table->string('details')->nullable();
            $table->integer('type');
            $table->string('type_description')->nullable();
            $table->integer('status');
            $table->unsignedBigInteger('work_assignment_id')->nullable();
            $table->unsignedBigInteger('earning_id')->nullable();
            $table->unsignedBigInteger('workstation_id');
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by');
            $table->timestamps();
            
            $table->foreign('employee_id')
                ->references('id')
                ->on('employees');
                
            $table->foreign('work_assignment_id')
                ->references('id')
                ->on('work_assignments');
                
            $table->foreign('earning_id')
                ->references('id')
                ->on('earnings');

            $table->foreign('workstation_id')
                ->references('id')
                ->on('workstations');

            $table->foreign('created_by')
                ->references('id')
                ->on('users');
            
            $table->foreign('updated_by')
                ->references('id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedulings');
    }
}
