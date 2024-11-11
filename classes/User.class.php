<?php
    include_once 'Database.class.php';

    class User{
        private $id;
        private $nome;
        private $email;
        private $senha;

        public function __construct($id, $nome, $email, $senha){
            $this->setId($id);
            $this->setNome($nome);
            $this->setEmail($email);
            $this->setSenha($senha);
        }
         
        public function setId($id){
            if($id < 0){
                throw new Exception("ID inválido");
            }else{
                $this->id = $id;
            }
        }

        public function setNome($nome){
            if($nome == ""){
                throw new Exception("Nome inválido");
            }else{
                $this->nome = $nome;
            }
        }

        public function setEmail($email){
            if($email == ""){
                throw new Exception("Email inválido");
            }else{
                $this->email = $email;
            }
        }

        public function setSenha($senha){
            if($senha == ""){
                throw new Exception("Senha inválida");
            }else{
                $this->senha = $senha;
            }
        }


        public function getId(){
            return $this->id;
        }   

        public function getNome(){
            return $this->nome;
        }

        public function getEmail(){
            return $this->email;
        }

        public function getSenha(){
            return $this->senha;
        }

        public function incluir(){
            $sql = "INSERT INTO users (nome, email, senha) 
                    VALUES (:nome, :email, :senha)";

            $parametros = array(
                ":nome" => $this->nome,
                ":email" => $this->email,
                ":senha" => sha1($this->senha)
            );
            return Database::executar($sql, $parametros);
        }

        public function alterar(){
            $sql = "UPDATE users 
                    SET nome = :nome, 
                        email = :email, 
                        senha = :senha 
                    WHERE id = :id";

            $parametros = array(
                ":nome" => $this->nome,
                ":email" => $this->email,
                ":senha" => sha1($this->senha),
                ":id" => $this->id
            );
            return Database::executar($sql, $parametros);
        }

        public function excluir(){
            $conexao = Database::getInstance();
            $sql = "DELETE FROM users WHERE id = :id";
            $comando = $conexao->prepare($sql);
            $comando->bindParam(":id", $this->id);
            return $comando->execute();
        }

        public static function listar($tipo = 0, $busca = ""){
            $conexao = Database::getInstance();
            $sql = "SELECT * FROM users";
            if($tipo > 0){
                switch($tipo){
                    case 1:
                        $sql .= " WHERE id = :busca";
                        break;
                    case 2:
                        $sql .= " WHERE nome LIKE :busca";
                        break;
                    case 3:
                        $sql .= " WHERE email LIKE :busca";
                        break;
                }
            }
            $comando = $conexao->prepare($sql);
            if($tipo > 0){
                $comando->bindParam(":busca", $busca);
            }
            $comando->execute();
            $users = array();
            while ($usuario = $comando->fetch()){
                $user = new User(
                    $usuario['id'], 
                    $usuario['nome'], 
                    $usuario['email'], 
                    $usuario['senha']
                );
                array_push($users, $user);
            }
            return $users;
        }
    }

    
?>