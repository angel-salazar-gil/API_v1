<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDependenciasTabla extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tdependencias', function (Blueprint $table) {
            $table->bigIncrements('depe_depe');
            $table->string('depe_nombre');
            $table->string('depe_username');
            $table->string('depe_password');
            $table->string('depe_email');
            $table->string('depe_revoke');
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
        Schema::dropIfExists('tdependencias');
    }
}
