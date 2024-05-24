<?php

namespace App\Models;

use App\Services\Database\PostgresSql;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $table = 'categorias';

    protected $categoria;

    public function __construct()
    {
        $this->categoria = new PostgresSql();
    }

    /**
     * Retorna las categorias
     *
     * @return array retorna un listado de categorias
     */

    public function show(): array
    {
        return $this->categoria->callSelect("select * from public.categorias", []);
    }
}
