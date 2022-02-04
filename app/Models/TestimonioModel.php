<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestimonioModel extends Model
{
    protected $table = 'testimonios';
    protected $primaryKey = 'tetimonials_id';
    protected $fillable = ['txTituloTestimonials', 'txContenidoTestimonials', 'idUsuario_usuario_id','txColorTestimonials','txBanerTestimonials'];
    public $timestamps = false;
}
