<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuariosTableSeeder extends Seeder
{
    public function run()
    {
        return DB::table('usuarios')->insert([
            [
                "txNombreUsuario" => "Daniel Clifford",
                "txEstadoUsuario" => "Verified Graduate",
                "txImgUsuario" => "image-daniel.jpg"
            ],
            [
                "txNombreUsuario" => "Jonathan Walters",
                "txEstadoUsuario" => "Verified Graduate",
                "txImgUsuario" => "image-jonathan.jpg"
            ],
            [
                "txNombreUsuario" => "Jeanette Harmon",
                "txEstadoUsuario" => "Verified Graduate",
                "txImgUsuario" => "image-jeanette.jpg"
            ],
            [
                "txNombreUsuario" => "Patrick Abrams",
                "txEstadoUsuario" => "Verified Graduate",
                "txImgUsuario" => "image-patrick.jpg"
            ],
            [
                "txNombreUsuario" => "Kira Whittle",
                "txEstadoUsuario" => "Verified Graduate",
                "txImgUsuario" => "image-kira.jpg"
            ],
        ]);
    }
}
