<?php 
namespace Database\Seeders; 
use App\Models\Idea; 
use Illuminate\Database\Seeder; 
class IdeaSeeder extends Seeder 
{ 
    public function run(): void 
    { 
        Idea::firstOrCreate([ 
            'titulo' => 'Aplicación para organizar citas 
            veterinarias', 
            'descripcion' => 'Sistema para registrar y organizar 
            citas de mascotas.', 
            'estado' => 'registrada', 
            'autor' => 'Jose', 
            'categoria_id' => 1 
        ]); 
        Idea::firstOrCreate([ 
            'titulo' => 'Plataforma para cursos en línea', 
            'descripcion' => 'Sistema para ofrecer cursos y 
            materiales educativos.', 
            'estado' => 'en revisión', 
            'autor' => 'Pedro', 
            'categoria_id' => 2 
        ]); 
        Idea::firstOrCreate([ 
            'titulo' => 'Gestión de pacientes en clínicas', 
            'descripcion' => 'Sistema para registrar y organizar información de pacientes en clínicas de salud.', 
            'estado' => 'en revisión', 
            'autor' => 'Michelle', 
            'categoria_id' => 3 
        ]); 
        Idea::firstOrCreate([ 
            'titulo' => 'Gestión de pacientes en clínicas', 
            'descripcion' => 'Sistema para registrar y organizar información de pacientes en clínicas de salud.', 
            'estado' => 'en revisión', 
            'autor' => 'Michello', 
            'categoria_id' => 3 
        ]);
                Idea::firstOrCreate([ 
            'titulo' => 'Gestión de pacientes en medicina', 
            'descripcion' => 'Sistema para registrar y organizar información de pacientes en clínicas de salud.', 
            'estado' => 'en revisión', 
            'autor' => 'Michella', 
            'categoria_id' => 3 
        ]);
    } 
} 