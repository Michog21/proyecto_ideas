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
            'descripcion' => 'Sistema para registrar y organizar citas de mascotas.', 
            'estado' => 'registrada', 
            'autor' => 'Jose', 
            'categoria_id' => 1 
        ]); 
        Idea::firstOrCreate([ 
            'titulo' => 'Plataforma para cursos en línea', 
            'descripcion' => 'Sistema para ofrecer cursos y materiales educativos.', 
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

// Categoría 1: Tecnología
        Idea::firstOrCreate([ 
            'titulo' => 'Sistema de gestión de inventarios RFID', 
            'descripcion' => 'Automatización de conteo de stock mediante etiquetas de radiofrecuencia.', 
            'estado' => 'registrada', 
            'autor' => 'Daniel', 
            'categoria_id' => 1 
        ]); 
        Idea::firstOrCreate([ 
            'titulo' => 'Plataforma de análisis de datos de ventas', 
            'descripcion' => 'Dashboard interactivo para visualizar métricas de comercio electrónico.', 
            'estado' => 'en revisión', 
            'autor' => 'Valeria', 
            'categoria_id' => 1 
        ]);
        Idea::firstOrCreate([ 
            'titulo' => 'Asistente virtual para atención técnica', 
            'descripcion' => 'Bot basado en lenguaje natural para resolver problemas comunes de hardware.', 
            'estado' => 'aprobada', 
            'autor' => 'Marcos', 
            'categoria_id' => 1 
        ]);

        // Categoría 2: Educación
        Idea::firstOrCreate([ 
            'titulo' => 'Simulador de finanzas personales', 
            'descripcion' => 'Juego interactivo para enseñar ahorro e inversión a jóvenes.', 
            'estado' => 'Rechazada', 
            'autor' => 'Elena', 
            'categoria_id' => 2 
        ]); 
        Idea::firstOrCreate([ 
            'titulo' => 'Red social de intercambio de idiomas', 
            'descripcion' => 'Conecta hablantes nativos para practicar conversaciones por videollamada.', 
            'estado' => 'registrada', 
            'autor' => 'Sergio', 
            'categoria_id' => 2 
        ]);
        Idea::firstOrCreate([ 
            'titulo' => 'Gestor de tareas escolares gamificado', 
            'descripcion' => 'Aplicación que otorga recompensas virtuales por completar tareas a tiempo.', 
            'estado' => 'en revisión', 
            'autor' => 'Paola', 
            'categoria_id' => 2 
        ]);

        // Categoría 3: Salud
        Idea::firstOrCreate([ 
            'titulo' => 'Diario digital de nutrición y síntomas', 
            'descripcion' => 'Registro diario de alimentos para detectar alergias o intolerancias.', 
            'estado' => 'aprobada', 
            'autor' => 'Andres', 
            'categoria_id' => 3 
        ]); 
        Idea::firstOrCreate([ 
            'titulo' => 'Plataforma de rutinas de fisioterapia', 
            'descripcion' => 'Videos guiados y seguimiento de progreso para rehabilitación física.', 
            'estado' => 'Rechazada', 
            'autor' => 'Camila', 
            'categoria_id' => 3 
        ]);
        Idea::firstOrCreate([ 
            'titulo' => 'Mapa de desfibriladores públicos', 
            'descripcion' => 'Localización colaborativa de equipo médico de emergencia en la ciudad.', 
            'estado' => 'registrada', 
            'autor' => 'Hugo', 
            'categoria_id' => 3 
        ]);

        // Categoría 4: Medio ambiente
        Idea::firstOrCreate([ 
            'titulo' => 'Sistema de adopción de áreas verdes', 
            'descripcion' => 'Plataforma para que vecinos coordinen el mantenimiento de parques locales.', 
            'estado' => 'en revisión', 
            'autor' => 'Natalia', 
            'categoria_id' => 4 
        ]);
        Idea::firstOrCreate([ 
            'titulo' => 'Mercado de ropa de segunda mano local', 
            'descripcion' => 'Aplicación para intercambio y venta de prendas usadas en la misma ciudad.', 
            'estado' => 'aprobada', 
            'autor' => 'Raul', 
            'categoria_id' => 4 
        ]);
        Idea::firstOrCreate([ 
            'titulo' => 'Rastreador de consumo eléctrico en el hogar', 
            'descripcion' => 'Integración con medidores inteligentes para sugerir ahorro de energía.', 
            'estado' => 'Rechazada', 
            'autor' => 'Carmen', 
            'categoria_id' => 4 
        ]);

        // Categoría 
        Idea::firstOrCreate([ 
            'titulo' => 'Directorio de productores agrícolas locales', 
            'descripcion' => 'Conecta restaurantes directamente con granjeros para comprar ingredientes frescos.', 
            'estado' => 'registrada', 
            'autor' => 'Julio', 
            'categoria_id' => 3 
        ]);
        Idea::firstOrCreate([ 
            'titulo' => 'Generador de menús semanales económicos', 
            'descripcion' => 'Algoritmo que sugiere comidas basadas en los ingredientes en oferta del supermercado.', 
            'estado' => 'en revisión', 
            'autor' => 'Teresa', 
            'categoria_id' => 4 
        ]);
        Idea::firstOrCreate([ 
            'titulo' => 'Sistema de reservas para comedores ocultos', 
            'descripcion' => 'Gestión de reservaciones y pagos para experiencias gastronómicas a puerta cerrada.', 
            'estado' => 'aprobada', 
            'autor' => 'Oscar', 
            'categoria_id' => 1 
        ]);        
    } 
} 