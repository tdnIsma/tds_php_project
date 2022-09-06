<?php
    require_once "../model/user_model.php";

    
    if(!isset($_GET["acao"])) { 
        $acao = "create";
    } else {
        $acao = $_GET["acao"];
    }


   if ($acao == "create"){

        if (isset($_POST['matricula']) || !empty($_POST['matricula'])){
            $matricula = $_POST['matricula'];
        } else{
            echo "Campo Matricula não preenchido";
        }

        /*if (isset($_POST['horario']) || !empty($_POST['horario'])){ 
            $tipo = $_POST['horario'];
        }
         
        else{
            echo "Campo Hora não preenchido";
        } */
        

        if (isset($_POST['tipo']) || !empty($_POST['tipo'])){
            $tipo = $_POST['tipo'];
        }
         
        else{
            echo "Campo Tipo não preenchido";
        } 
        


        $userModelPontoEletronico = new userModelPontoEletronico(); 
        $result = $userModelPontoEletronico -> create($matricula, $tipo); 
    
    }
?>