<?php

namespace App\Models;

use App\Services\Database\PostgresSql;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends PostgresSql
{
    use HasFactory;

    protected $table = 'servicios';

    protected $servicio;

    public function __construct()
    {
        $this->servicio = new PostgresSql();
    }

    /**
     * Retorna los servicios filtrados por categoria
     *
     * @param int $categoria_id
     * @return array listado de servicios
     */

    public function show(int $categoria_id): array
    {
        return $this->servicio->callSelect("select * from public.servicios where categoria_id = :id", ['id' => $categoria_id]);
    }
}
