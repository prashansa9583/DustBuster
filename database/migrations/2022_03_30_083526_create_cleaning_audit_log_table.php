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
        Schema::create('cleaning_audit_log', function (Blueprint $table) {
            $table->id();
            $table->string('reg_plate');
            $table->string('actionBy');
            $table->string('cleaning_type');
            $table->timestamp('cleaned_at')->useCurrent();
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
        Schema::dropIfExists('cleaning_audit_log');
    }
};
