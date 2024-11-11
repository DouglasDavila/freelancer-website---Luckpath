<?php
    include_once '../classes/Database.class.php';
    include_once '../classes/User.class.php';
    
    $id = isset($_GET['id']) ? $_GET['id'] : 0;
    $msg = isset($_GET['MSG']) ? $_GET['MSG'] : "";
    if($id > 0){
        $user = User::listar(1, $id)[0];
    }

    $acao = isset($_POST['acao']) ? $_POST['acao'] : "";

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $id = isset($_POST['id']) ? $_POST['id'] : 0;
        $nome = isset($_POST['nome']) ? $_POST['nome'] : "";
        $email = isset($_POST['email']) ? $_POST['email'] : "";
        $senha = isset($_POST['senha']) ? $_POST['senha'] : "";
        $confirm = isset($_POST['confirm']) ? $_POST['confirm'] : "";

        try{
            $user = new User($id, $nome, $email, $senha, $confirm);
            $resultado = "";
            // var_dump($user);
            // die;

            switch($acao){
                case "Salvar":
                    if($senha === $confirm){
                        $resultado = $user->incluir();
                    }else{
                        header("Location: cadastro.php?error");
                    }
                    break;
                case "Alterar":
                    $resultado = $user->alterar();
                    break;
                case "Excluir":
                    $resultado = $user->excluir();
                    break;
            }
            if($resultado){
                switch($acao){
                    case "Salvar":
                        if($senha === $confirm){
                            session_start();
                            $_SESSION['email'] = $user->getEmail();
                            header("Location: inicial.php");
                        }else{
                            header("Location: cadastro.php?error");
                        }
                        break;
                    case "Alterar":
                        session_start();
                        $_SESSION['email'] = $user->getEmail();
                        $_SESSION['id'] = $user->getId();
                        header("Location: meu_perfil.php");
                        break;
                    case "Excluir":
                        session_start();
                        session_destroy();
                        header("Location: cadastro.php");
                        break;
                }
            }
            else{
                echo "Erro ao processar ação";
            }
        }catch(Exception $e){
            header("Location: cadastro.php?MSG=ERROR" . $e->getMessage());
        }
    }else if($_SERVER['REQUEST_METHOD'] == 'GET'){
        $busca = isset($_GET['busca']) ? $_GET['busca'] : "";
        $tipo = isset($_GET['tipo']) ? $_GET['tipo'] : 0;
        $lista = User::listar($tipo, $busca);
    }
?>