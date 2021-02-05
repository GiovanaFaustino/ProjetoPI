<?php

class Bibliotecario{

    public function login($idusuario, $senha){
        global $pdo;

        $sql = "SELECT * FROM bibliotecario Where idusuario = :idusuario AND senha = :senha";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("idusuario", $idusuario);
        $sql->bindValue("senha", $senha);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $dado = $sql->fetch();

            $_SESSION['iduser'] = $dado['idusuario'];

            return true;
        } else {
            return false;
        }

    }

    public function logged($id){
        global $pdo;

        $array = array();

        $sql = "SELECT nome FROM bibliotecario WHERE idusuario = :idusuario";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("idusuario", $id);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $array = $sql->fetch();
        }

        return $array;


    }
}






?>