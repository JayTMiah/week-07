<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreatmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // create the treatments table
        // it's a termlist so call the string column name
        // don't need timestamps - not very useful here
        Schema::create("treatments", function (Blueprint $table) {
            $table->id();
            $table->string("name", 30);
        });
    
        // create the pivot table using the Eloquent naming convention
        Schema::create("animal_treatment", function (Blueprint $table) {
        // still have an id column
            $table->id();
        // create the article id column and foreign key
            $table->foreignId("animal_id")
                ->constrained()
                ->onDelete("cascade");
        // create the tag id column and foreign key
            $table->foreignId("treatment_id")
                ->constrained()
                ->onDelete("cascade");
        });
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animal_treatments');
        Schema::dropIfExists('treatments');        
    }
}
