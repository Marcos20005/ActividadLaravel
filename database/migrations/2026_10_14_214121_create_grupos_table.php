<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('grupos', function (Blueprint $table) {
            $table->id();
            $table->integer('numero');
            $table->integer('cupo');
            $table->foreignId('curso_id')->constrained('cursos')->cascadeOnDelete();
            $table->foreignId('docente_id')->constrained('docentes');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('grupos');
    }
};