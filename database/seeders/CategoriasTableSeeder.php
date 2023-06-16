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
        Categoria::factory()->count(2000)->create();
        // $data = [
        //     [
        //         'nombre' => 'Botanas',
        //         'created_at' => '2023-01-02 18:19:52',
        //         'updated_at' => '2023-01-02 18:19:52'
        //     ],
        //     [
        //         'nombre' => 'Caramelos',
        //         'created_at' => '2023-01-02 18:19:52',
        //         'updated_at' => '2023-01-02 18:19:52'
        //     ],
        //     [
        //         'nombre' => 'Chicles',
        //         'created_at' => '2023-01-02 18:19:52',
        //         'updated_at' => '2023-01-02 18:19:52'
        //     ],
        //     [
        //         'nombre' => 'Chocolates',
        //         'created_at' => '2023-01-02 18:19:52',
        //         'updated_at' => '2023-01-02 18:19:52'
        //     ],
        //     [
        //         'nombre' => 'Dulces con juguete',
        //         'created_at' => '2023-01-02 18:19:52',
        //         'updated_at' => '2023-01-02 18:19:52'
        //     ],
        //     [
        //         'nombre' => 'Dulces Típicos',
        //         'created_at' => '2023-01-02 18:19:52',
        //         'updated_at' => '2023-01-02 18:19:52'
        //     ],  
        //     [
        //         'nombre' => 'Galletas',
        //         'created_at' => '2023-01-02 18:19:52',
        //         'updated_at' => '2023-01-02 18:19:52'
        //     ],
            
        //     ];
        //     DB::table('categorias')->insert($data);


        }
    }
