<?php
    namespace app\controllers;
    
    class ClienteController{
        public function index(){
            echo "Método Index (Cliente)";
        }

        public function lista($valor){
            echo "<p>Estou listando os Clientes $valor</p>";
        }
    }