<?php

use App\Models\Categoria;
use App\Models\Idea;
use Illuminate\Foundation\Testing\RefreshDatabase;
uses(RefreshDatabase::class);
use Illuminate\Database\QueryException;

test('utilizar base de datos de prueba', function () {
    expect(config('database.default'))->toBe('sqlite');
    expect(config('database.connections.sqlite.database'))->toBe(':memory:');
});

test('registrar una categoría', function () {
    Categoria::create([
        'nombre' => 'Ideas relacionadas con comida',
        'descripcion' => 'Ideas relacionadas con la comida y la gastronomía.'
    ]);

    $this->assertDatabaseHas('categorias', [
        'nombre' => 'Ideas relacionadas con comida',
        'descripcion' => 'Ideas relacionadas con la comida y la gastronomía.'   
    ]);
  
});

test('consultar una categoría', function () {
    $categoria = Categoria::create([
        'nombre' => 'Ideas relacionadas con comida',
        'descripcion' => 'Ideas relacionadas con la comida y la gastronomía.'
    ]);

    $encontrada = Categoria::find($categoria->id);
    expect($encontrada->nombre)->toBe('Ideas relacionadas con comida');

});

test('modificar una categoria', function () {
    $categoria=Categoria::create([
        'nombre'=>'Ciencia',
        'descripcion'=>'Ideas de ciencias',
    ]); 

    $categoria->update([
        'nombre'=>'Innovacion',
    ]);
    
    $this->assertDatabaseHas('categorias', [
        'id'=>$categoria->id,
        'nombre'=>'Innovacion',
    ]);

    $this->assertDatabaseMissing('categorias', [
        'id'=>$categoria->id,
        'nombre'=>'Ciencia',
    ]);    
});

test('eliminar una categoría', function () {
    $categoria = Categoria::create([
        'nombre' => 'Ideas relacionadas con comida',
        'descripcion' => 'Ideas relacionadas con la comida y la gastronomía.'
    ]);

    $categoria->delete();
    $this->assertDatabaseMissing('categorias', [
        'id' => $categoria->id
    ]);

});

test('una categoría puede tener varias ideas', function () {
    $categoria = Categoria::create([
    'nombre' => 'Tecnología',
    'descripcion' => 'Ideas relacionadas con tecnología y software.'
    ]);

    Idea::create([
        'titulo' => 'Aplicación de transporte',
        'descripcion' => 'Aplicación para compartir viajes',
        'autor' => 'Ana',
        'estado' => 'registrada',
        'categoria_id' => $categoria->id
    ]);

    Idea::create([
        'titulo' => 'Sistema de inventario',
        'descripcion' => 'Control de productos',
        'autor' => 'Luis',
        'estado' => 'registrada',
        'categoria_id' => $categoria->id
    ]);

        expect($categoria->ideas)->toHaveCount(2);
});

test('no se puede borrar una categoria con ideas asociadas', function () {
  $categoria = Categoria::create([
    'nombre' => 'Tecnología',
    'descripcion' => 'Ideas tecnológicas'
  ]);

  Idea::create([
    'titulo' => 'Aplicación de transporte',
    'descripcion' => 'Aplicación para compartir viajes',
    'autor' => 'Ana',
    'estado' => 'registrada',
    'categoria_id' => $categoria->id
  ]);

  Idea::create([
    'titulo' => 'Sistema de inventario',
    'descripcion' => 'Control de productos',
    'autor' => 'Luis',
    'estado' => 'registrada',
    'categoria_id' => $categoria->id
  ]);

    $seRechazo = true;
  try{
    $categoria->delete();
  }catch(QueryException $e){
    $seRechazo = true;
  }
    expect($seRechazo)->toBeTrue();

    $this->assertDatabaseHas('categorias', [
        'id' => $categoria->id
    ]);
});