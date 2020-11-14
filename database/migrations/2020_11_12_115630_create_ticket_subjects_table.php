<?php


use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketSubjectsTable extends \Illuminate\Database\Migrations\Migration
{
    public function up()
    {
        Schema::create("ticket_subjects", function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->text("description")->nullable();
            $table->unsignedInteger("department_id");
            $table->integer("priority")->default(1);
        });
    }

    public function drop()
    {
        Schema::dropIfExists("ticket_subjects");
    }
}