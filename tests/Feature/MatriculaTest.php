<?php

use App\Models\Curso;
use App\Models\Docente;
use App\Models\Grupo;
use App\Models\Estudiante;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('crea un grupo con dos estudiantes matriculados', function () {
    $curso = Curso::create([
        'codigo' => 'IF-4101',
        'nombre' => 'Ingeniería de Software',
    ]);

    $docente = Docente::create([
        'nombre' => 'Carlos Ramírez',
    ]);

    $grupo = Grupo::create([
        'numero' => 1,
        'cupo' => 30,
        'curso_id' => $curso->id,
        'docente_id' => $docente->id,
    ]);

    $estudiante1 = Estudiante::create(['nombre' => 'Ana Gómez']);
    $estudiante2 = Estudiante::create(['nombre' => 'Luis Mora']);

    // Matricular a los dos estudiantes con fecha y nota final
    $grupo->matricularEstudiante($estudiante1, '2026-10-14', 95.0);
    $grupo->matricularEstudiante($estudiante2, '2026-10-14', 88.5);

    // Verificar que el grupo tiene 2 estudiantes y que las notas viven en la tabla pivote
    expect($grupo->estudiantes)->toHaveCount(2);
    
    $this->assertDatabaseHas('estudiante_grupo', [
        'grupo_id' => $grupo->id,
        'estudiante_id' => $estudiante1->id,
        'fecha' => '2026-10-14',
        'nota_final' => 95.0,
    ]);

    $this->assertDatabaseHas('estudiante_grupo', [
        'grupo_id' => $grupo->id,
        'estudiante_id' => $estudiante2->id,
        'fecha' => '2026-10-14',
        'nota_final' => 88.5,
    ]);
});