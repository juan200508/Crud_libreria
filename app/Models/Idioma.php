<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{
    use HasFactory;

    protected $table = 'lib_idioma';
    protected $primaryKey = 'cod_idioma';
    protected $fillable = ['descripcion'];

    public $timestamps = false;

    public function libro()
    {
        return $this->hasMany(Libro::class, 'cod_libro', 'cod_libro');
    }
}
