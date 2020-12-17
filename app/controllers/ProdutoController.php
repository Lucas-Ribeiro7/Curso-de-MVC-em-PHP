<?php
    namespace app\controllers;
    
    class ProdutoController{
        public function index(){
            echo "Método Index (Produto)";
        }

        public function lista($valor = 10){
            echo "<p>Estou listando os Produtos $valor</p>";
        }
    }