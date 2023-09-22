 <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id()->unique();;
            $table->string('cli_nombre');
            $table->string('cli_apellido');
            $table->string('cli_correo')->unique();
            $table->string('cli_celular')->unique();
            $table->string('cli_ciudad');
            $table->string('cli_estado');
            $table->timestamps();
            $table->integer('cli_cedula');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
