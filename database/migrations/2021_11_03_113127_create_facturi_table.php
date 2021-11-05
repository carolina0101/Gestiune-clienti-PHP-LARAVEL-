<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('facturi', function (Blueprint $table) {
            $table->string('nrfactura')->primary();
            $table->dateTime('data');
            $table->string('serviciufacturat');
        });

        Schema::table('facturi', function (Blueprint $table) {
            $table->unsignedInteger('idclient');
            $table->foreign('idclient')->references('id')->on('clients')->onDelete('cascade');
            
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facturi');
    }
}
