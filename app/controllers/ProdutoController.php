<?php
    namespace app\controllers;
    
    class ProdutoController{
        public function index(){
            echo "Método Index (Produto)";
        }

        public function lista($valor){
            echo "<p>Estou listando os Produtos $valor</p>";
        }
    }