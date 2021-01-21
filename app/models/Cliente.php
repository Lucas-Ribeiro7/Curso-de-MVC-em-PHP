<?php
    namespace app\models;
    use app\core\Model;
    
    class Cliente extends Model{
        public function __construct(){
            parent::__construct();
        }
        public function lista(){
            $sql = "SELECT * FROM clientes";
            $qry = $this->db->query($sql);
            return $qry->fetchAll(\PDO::FETCH_OBJ);
        }
        public function getCliente($id_cliente){
            $resultado = array();
            $sql = $this->db->query("SELECT * FROM clientes WHERE id_cliente = $id_cliente");
            if($sql->rowCount() > 0){
                $resultado = $sql->fetch(\PDO::FETCH_OBJ);
            }
            return $resultado;
        }
        public function inserir($nome, $email, $fone){
            $sql = $this->db->query("INSERT INTO `clientes`(`nome`, `email`, `telefone`) VALUES ('$nome','$email','$fone')");
            
            /*
            $sql = "INSERT INTO cliente SET nome = :nome, email = :email, telefone = :fone";
            $qry = $this->db->prepare($sql);
            $qry->bindValue(":nome", $nome);
            $qry->bindValue(":email", $email);
            $qry->bindValue(":fone", $fone);
            $qry->execute();

            return $this->db->lastInsertId();
            */
        }
        public function editar($id_cliente,$nome,$email,$telefone){
            $sql = $this->db->query("UPDATE clientes SET nome = '$nome', email = '$email', telefone = '$telefone' WHERE id_cliente = '$id_cliente'");
        }
        
    }