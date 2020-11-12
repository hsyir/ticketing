<?php


use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketStatusesTable extends \Illuminate\Database\Migrations\Migration
{
    public function up()
    {
        Schema::create("ticket_statuses", function (Blueprint $table) {
            $table->id();
            $table->string("name");
        });
    }

    public function drop()
    {
        Schema::dropIfExists("ticket_statuses");
    }
}