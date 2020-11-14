<?php


use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends \Illuminate\Database\Migrations\Migration
{
    public function up()
    {
        Schema::create("tickets", function (Blueprint $table) {
            $table->id();
            $table->string("title")->nullable();
            $table->text("body")->nullable();
            $table->boolean("is_private")->default(false);
            $table->integer("level")->default(false);
            $table->unsignedInteger("parent_ticket_id")->nullable();
            $table->unsignedInteger("creator_id")->nullable();
            $table->unsignedInteger("user_id")->nullable();
            $table->unsignedInteger("department_id")->nullable();
            $table->unsignedInteger("subject_id")->nullable();
            $table->unsignedInteger("status_id")->nullable();
            $table->unsignedInteger("priority_id")->nullable();
            $table->dateTime("closed_at")->nullable();
            $table->integer("score")->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function drop()
    {
        Schema::dropIfExists("tickets");
    }
}