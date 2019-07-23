<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinancasTable extends Migration
{
    public function up()
    {
        Schema::create('financas', function (Blueprint $table) {
            $table->bigIncrements('id');            
            $table->string('nomeConta', 255);            
            $table->string('dataVenc', 255);     
            $table->string('dataPag', 255); 
            $table->string('Valor', 255);
            $table->text('description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('financas');
    }
}
