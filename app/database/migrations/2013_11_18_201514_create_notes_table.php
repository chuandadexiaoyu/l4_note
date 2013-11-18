<?php

use Illuminate\Database\Migrations\Migration;

class CreateNotesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        Schema::create("notes", function ($table) {

            $table->increments('id');
            $table->string('title', 255);
            $table->text('content');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {

        Schema::drop("notes");
    }
}