<?php


use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDepartmentTable extends \Illuminate\Database\Migrations\Migration
{
    public function up()
    {
        Schema::create("user_department", function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger("user_id");
            $table->unsignedInteger("department_id");
            $table->boolean("supervisor");
        });
    }

    public function drop()
    {
        Schema::dropIfExists("user_department");
    }
}