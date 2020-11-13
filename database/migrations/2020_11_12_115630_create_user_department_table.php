<?php


use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDepartmentTable extends \Illuminate\Database\Migrations\Migration
{
    public function up()
    {
        Schema::create("department_user", function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger("user_id");
            $table->unsignedInteger("department_id");
            $table->boolean("is_supervisor")->default(false);
        });
    }

    public function drop()
    {
        Schema::dropIfExists("department_user");
    }
}