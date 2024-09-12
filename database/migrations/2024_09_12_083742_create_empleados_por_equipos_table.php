<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados_por_equipos', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("equipo_trabajo_id");
            $table->foreign("equipo_trabajo_id")
                ->references("id")
                ->on("equipo_trabajos");

            $table->unsignedBigInteger("empleado_id");
            $table->foreign("empleado_id")
                ->references("id")
                ->on("empleados");

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
        Schema::dropIfExists('empleados_por_equipos');
    }
};
