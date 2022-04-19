<?php

use Models\ClassCrud;

include("../model/class_connect.php");
include("../model/class_crud.php");
include("../helpers/variables.php");



    $Crud = new ClassCrud;

    var_dump($Crud->insertDB(
        "lista",
        "?,?,?,?,?,?",
        array(
            $id,
            $nome_tar,
            $prazo_ent,
            $prio,
            $resp,
            $obs
        )
    ));

    echo "<script> alert('Cadastrado com sucesso');</script>";
    echo "<script> window.location.replace('../index.php');</script>";
    exit;
