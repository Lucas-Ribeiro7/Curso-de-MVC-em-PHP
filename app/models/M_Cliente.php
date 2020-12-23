<?php

    namespace app\models;
    use app\core\Model;

class M_Cliente extends Model {
        public function __construct(){
            parent::__construct(); //Chama o construtor da classe extendida
        }
        public function lista(){
            $sql = "SELECT * FROM pessoa";
            $qry = $this->db->query($sql);
            return $qry->fetchAll();
        }
    }