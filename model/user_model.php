<?php

    require_once "../util/database.php";

class UserModelPontoEletronico {

    public function create($matricula, $tipo) {
        $db = new Database();
        $con = $db->connect();
        //$sql = "INSERT INTO USER (name, address, email, password) VALUES(:name, :address, :email, :password)";
        //$result = $con->execute($sql);

        $sql = "INSERT INTO ponto (matricula, data_hora, tipo) VALUES (:matricula, current_time(), :tipo)"; //: coloca " " e torna tudo dentro tipo uma string
        $stmt = $con->prepare($sql);
        $result = $stmt->execute(['matricula'=>$matricula, 'tipo'=>$tipo]); //name entre aspas deve ser o mesmo name que está nos VALUES

        return  $result;

    }

}
?>


