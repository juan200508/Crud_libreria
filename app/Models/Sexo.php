<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class Sexo extends Model
{
    use HasFactory;

    protected $table = 'lib_sexo';
    protected $primaryKey = 'cod_sexo';
    protected $fillable = ['descripcion'];

    public $timestamps = false;

    public function autor()
    {
        return $this->hasMany(Autor::class, 'cod_sexo', 'cod_sexo');
    }
}
