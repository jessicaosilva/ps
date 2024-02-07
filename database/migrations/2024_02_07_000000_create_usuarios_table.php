<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('UsuarioID');
            $table->string('Nome');
            $table->string('Email')->unique();
            $table->string('Senha');
            $table->integer('TipoUsuarioID')->default(1)->notNull()->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });

        DB::table('usuarios')->insert([
            [
            'Nome' => 'Jessica',
            'Email' => 'jessyolie3@gmail.com',
            'Senha' => '1234',
            'TipoUsuarioID' => '1',
            ],
            [
            'Nome' => 'Rebeca',
            'Email' => 'rebeca.feitosa60@gmail.com',
            'Senha' => '1234',
            'TipoUsuarioID' => '1',
            ],
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
?>