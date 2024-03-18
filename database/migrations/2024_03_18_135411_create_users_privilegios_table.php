<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersPrivilegiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_privilegios', function (Blueprint $table) {
            $table->id();
            $table->string('privilegio');
            $table->unsignedInteger('menuId')->nullable();
            $table->string('botao')->nullable();
            $table->string('campo')->nullable();
            $table->unsignedInteger('privilegioPai')->nullable();
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
        Schema::dropIfExists('users_privilegios');
    }
}
