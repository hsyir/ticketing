<?php


use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketTypesTable extends \Illuminate\Database\Migrations\Migration
{
    public function up()
    {
        Schema::create("ticket_types", function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("color");
        });
    }

    public function drop()
    {
        Schema::dropIfExists("ticket_types");
    }
}