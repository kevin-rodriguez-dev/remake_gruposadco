<?php

namespace App\Services\Database;

interface ConexionService{

    public function callSelect(String $query, Array $args);

    public function callStoreProcedure(String $procedure, Array $argsd);

    public function callInserOrUpdate(String $sql, array $array, $id = null);
}
