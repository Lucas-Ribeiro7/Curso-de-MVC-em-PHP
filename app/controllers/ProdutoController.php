<?php
    namespace app\controllers;

    use app\core\Controller;
    
    class ProdutoController extends Controller{
        public function index(){
            echo "Método Index (Produto)";
        }

        public function lista($valor = 10){
            echo "<p>Estou listando os Produtos $valor</p>";
        }

        public function ver(){
            //Chamando a view "v_cliente.php"
            $dados['nome'] = "Boneco do Naruto";
            $dados['valor'] = "50,00";
            $this->load("v_produto", $dados);
        }

        
    }