<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTipoUsuariosTable extends Migration
{
    public function up()
    {
        Schema::create('tipo_usuarios', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('TipoUsuarioID');
            $table->string('Tipo');
            $table->timestamps();
            $table->softDeletes();
        });

        DB::table('tipo_usuarios')->insert([
            [
            'Tipo' => 'Administrador',
            ],
            [
            'Tipo' => 'Usuario',
            ],
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('tipo_usuarios');
    }
}
?>