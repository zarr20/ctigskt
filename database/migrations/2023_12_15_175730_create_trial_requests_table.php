<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrialRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trial_requests', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('corporate_email');
            $table->string('job_title');
            $table->string('company_name');
            $table->string('industry');
            $table->string('phone_number');
            $table->boolean('agree')->default(false);
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('trial_requests');
    }
}
