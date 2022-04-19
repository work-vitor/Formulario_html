<?php

namespace Models;

class ClassCrud extends Conexao
{

    private $Crud;
    private $Cont;

    //Contador de Parametros
    private function countParameters($parameters)
    {
        $this->Cont = count($parameters);
    }

    //Preparando declarativas
    public function preparedStatements($query, $parameters)
    {

        $this->countParameters($parameters);
        $this->Crud = $this->connectDB()->prepare($query);

        if($this->Cont > 0){
            for($i=1; $i <= $this->Cont; $i++){
                $this->Crud->bindValue($i, $parameters[$i-1]);
            }
        }

        $this->Crud->execute();
    }

    //Insert
    public function insertDB($table, $cond, $parameters){
        $this->preparedStatements("insert into {$table} values ({$cond})", $parameters);
        return $this->Crud;
    }
}
