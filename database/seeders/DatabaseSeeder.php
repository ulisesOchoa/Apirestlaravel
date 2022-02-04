<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        
        $this->call(UsuariosTableSeeder::class);

        DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas
        $this->call(TestimoniosTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // Reactivamos la revisión de claves foráneas
    }
}
