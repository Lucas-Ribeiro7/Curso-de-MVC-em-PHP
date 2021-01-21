<?php
    namespace app\controllers;
    use app\core\Controller;
    use app\models\Cliente;

class ClienteController extends Controller{
        public function index(){
            $cliente = new Cliente();
            $dados["clientes"] = $cliente->lista();
            $dados["view"] = "cliente/Index";
            $this->load("template", $dados);
        }
        public function novo(){
            $dados["view"] = "cliente/Create";
            $this->load("template", $dados);
        }
        public function edit($id_cliente){
            $cliente = new Cliente();
            $dados['cliente'] = $cliente->getCliente($id_cliente);
            $dados['view'] = "cliente/Edit";
            $this->load("template", $dados);
        }
        public function delete($id_cliente){
            $dados['view'] = "cliente/Delete";
            $this->load("template", $dados);
        }
        public function salvar(){
            $cliente = new Cliente();
            $id_cliente = $_POST['id_cliente'];
            $nome = $_POST['txt_nome'];
            $email = $_POST['txt_email'];
            $telefone = $_POST['txt_fone'];

            /*Diferença de INSERIR para EDITAR*/

            if($id_cliente){ /*Se houver ID, é para alterar*/
                $cliente->editar($id_cliente, $nome, $email, $telefone);
            }else{ /*Senão é inserir*/
                $cliente->inserir($nome, $email, $telefone); 
            }
            
            header("location:" . URL_BASE . "cliente");
            
        }
    }