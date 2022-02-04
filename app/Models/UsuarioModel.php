<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UsuarioModel extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'usuario_id';
    protected $fillable = ['txNombreUsuario', 'txImgUsuario', 'txEstadoUsuario'];
    public $timestamps = false;

    public function getAllUsuarioTestimonio()
    {
        $testimonio = DB::table('usuarios as us')
            ->join('testimonios as te', 'us.usuario_id', 'te.idUsuario_usuario_id')->get();

        return $testimonio;
    }
}
