<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Categoria::factory()->count(25)->create();
        $data = [
            [
                'nombre'     => 'Botanas',
                'imagen'     => 'shadow.jpg',
                'created_at' => '2023-01-02 18:19:52',
                'updated_at' => '2023-01-02 18:19:52'
            ],
            [
                'nombre'     => 'Caramelos',
                'imagen'     => 'shadow.jpg',
                'created_at' => '2023-01-02 18:19:52',
                'updated_at' => '2023-01-02 18:19:52'
            ],
            [
                'nombre'     => 'Chicles',
                'imagen'     => 'shadow.jpg',
                'created_at' => '2023-01-02 18:19:52',
                'updated_at' => '2023-01-02 18:19:52'
            ],
            [
                'nombre'     => 'Chocolates',
                'imagen'     => 'shadow.jpg',
                'created_at' => '2023-01-02 18:19:52',
                'updated_at' => '2023-01-02 18:19:52'
            ],
            [
                'nombre'     => 'Dulces con juguete',
                'imagen'     => 'shadow.jpg',
                'created_at' => '2023-01-02 18:19:52',
                'updated_at' => '2023-01-02 18:19:52'
            ],
            [
                'nombre'     => 'Dulces Típicos',
                'imagen'     => 'shadow.jpg',
                'created_at' => '2023-01-02 18:19:52',
                'updated_at' => '2023-01-02 18:19:52'
            ],  
            [
                'nombre'     => 'Galletas',
                'imagen'     => 'shadow.jpg',
                'created_at' => '2023-01-02 18:19:52',
                'updated_at' => '2023-01-02 18:19:52'
            ],
            
            [
                'nombre'     => 'Gelatinas',
                'imagen'     => 'shadow.jpg',
                'created_at' => '2023-01-02 18:19:52',
                'updated_at' => '2023-01-02 18:19:52'
            ],
            
            [
                'nombre'     => 'Gomitas',
                'imagen'     => 'shadow.jpg',
                'created_at' => '2023-01-02 18:19:52',
                'updated_at' => '2023-01-02 18:19:52'
            ],
            
            [
                'nombre'     => 'Malvaviscos',
                'imagen'     => 'shadow.jpg',
                'created_at' => '2023-01-02 18:19:52',
                'updated_at' => '2023-01-02 18:19:52'
            ],
            
            [
                'nombre'     => 'Mazapanes',
                'imagen'     => 'shadow.jpg',
                'created_at' => '2023-01-02 18:19:52',
                'updated_at' => '2023-01-02 18:19:52'
            ],
            
            [
                'nombre'     => 'Paletas',
                'imagen'     => 'shadow.jpg',
                'created_at' => '2023-01-02 18:19:52',
                'updated_at' => '2023-01-02 18:19:52'
            ],

            [
                'nombre'     => 'Pulpas',
                'imagen'     => 'shadow.jpg',
                'created_at' => '2023-01-02 18:19:52',
                'updated_at' => '2023-01-02 18:19:52'
            ],

            [
                'nombre'     => 'Polvitos',
                'imagen'     => 'shadow.jpg',
                'created_at' => '2023-01-02 18:19:52',
                'updated_at' => '2023-01-02 18:19:52'
            ],
            
            ];
            DB::table('categorias')->insert($data);


        }
    }
