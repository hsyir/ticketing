<?php


use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentsTable extends \Illuminate\Database\Migrations\Migration
{
    public function up()
    {
        Schema::create("departments", function (Blueprint $table) {
            $table->id();
            $table->string("name");
        });
    }

    public function drop()
    {
        Schema::dropIfExists("departments");
    }
}