<?php
include 'ClassConect.php';

class ClassCidades extends ClassConnect
{

    public function getCidades($idEstado)
    {
        $cidades = $this->connectDB()->prepare('select * from cidades where estadoId = ?');
        $cidades->bindValue(1, $idEstado);
        $cidades->execute();
        return $fCidades = $cidades->fetchAll(\PDO::FETCH_OBJ);
    }

}
