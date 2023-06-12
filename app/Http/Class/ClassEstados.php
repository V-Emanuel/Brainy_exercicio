<?php
include 'ClassConect.php';

class ClassEstados extends ClassConnect
{

    public function getEstados()
    {
        $estados = $this->connectDB()->prepare('select * from estados');
        $estados->execute();
        return $fEstados = $estados->fetchAll(\PDO::FETCH_OBJ);
    }

}
