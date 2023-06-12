<?php

class ClassConnect
{
        public function connectDB()
        {
            try{
                return $con=new \PDO(`mysql:host=localhost;dbname=brainy","root","senha123`);
            }catch (\PDOException $erro){
                return $erro->getMessage();
            }
        }
}
