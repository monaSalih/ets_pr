<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCohortsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cohorts', function (Blueprint $table) {
            $table->id();
            $table->integer('number');
            $table->string('name');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('training_location');
            $table->longtext('description');
            $table->unsignedBigInteger('academy_id'); //need relation between cohort(academy_id) with academies (id)
            $table->unsignedBigInteger('fund_id');
            $table->foreign('fund_id')->references('id')->on('funds');
            $table->string('training_type');
            $table->string('technology');
            $table->string('donor_type');
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
        Schema::dropIfExists('cohorts');
    }
}
