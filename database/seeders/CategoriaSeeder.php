<?php 
namespace Database\Seeders; 
use App\Models\Categoria; 
use Illuminate\Database\Seeder; 
class CategoriaSeeder extends Seeder 
{ 
    public function run(): void 
    { 
        Categoria::firstOrCreate(
        ['id' => 1],    
        [ 
            'nombre' => 'Tecnología', 
            'descripcion' => 'Ideas relacionadas con tecnología y 
            software.' 
        ]); 
        Categoria::firstOrCreate(
        ['id' => 2],
        [ 
            'nombre' => 'Educación', 
            'descripcion' => 'Ideas relacionadas con educación y 
            aprendizaje.' 
        ]); 
        Categoria::firstOrCreate(
        ['id' => 3],
        [ 
            'nombre' => 'Salud', 
            'descripcion' => 'Ideas relacionadas con salud y 
            bienestar.' 
        ]); 
        Categoria::firstOrCreate(
        ['id' => 4],
        [ 
            'nombre' => 'Medio ambiente', 
            'descripcion' => 'Ideas relacionadas con el cuidado 
            del medio ambiente.' 
        ]); 
        Categoria::firstOrCreate(
        ['id' => 5],
        [ 
            'nombre' => 'Ideas relacionadas con comida', 
            'descripcion' => 'Ideas relacionadas con la comida y la gastronomía.'
        ]);
    } 
} 