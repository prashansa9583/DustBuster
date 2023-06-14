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
        Schema::create('deep', function (Blueprint $table) {
            $table->id();
            $table->string('bus_reg_plate');
            $table->foreign('bus_reg_plate')->references('reg_plate')->on('bus');
            $table->date('cleaned_date');
            $table->date('next_due_date');
            $table->biginteger('status');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            $table->boolean('delete_status')->default(0); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deep');
    }
};
