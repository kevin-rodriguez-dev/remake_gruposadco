<?php

namespace App\Services\Database;

use Exception;
use Illuminate\Support\Facades\DB;

class PostgresSql implements ConexionService {

    private $alpha;

    public function __construct()
    {
        $this->alpha = '?,';
        DB::connection()->getPdo();
    }

    public function callSelect(String $sql, array $array): array
    {
        try{
            return DB::select($sql, $array);

        }catch(Exception $e){
            die("Error en el callSelect ".$e);
        }
    }

    public function callStoreProcedure(String $procedure, Array $array){

        try{
            $parameter = "(";
            for ($i = 0; $i < count($array); $i++) {
                $parameter .= $this->alpha;
            }
            $parameter .= ")";
            $parameter = str_replace($this->alpha . ")", '?)', $parameter);
            $query = 'CALL ' . $procedure . $parameter;

            DB::select($query, $array);
        }catch(Exception $e){
            die("Error en el callStoreProcedure ".$e);
        }
    }

    public function callInserOrUpdate(String $sql, array $array, $id = null)
    {
        try{
            if(isset($id)){
                return DB::update($sql, $array);
            }else{
                return DB::insert($sql, $array);
            }
        }catch(Exception $e){
            die("Error en el callInserOrUpdate ".$e);
        }
    }
}
