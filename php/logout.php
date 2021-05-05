<?php
    session_start();
    if(isset($_SESSION['unique_id'])){ // se o usuário estiver logado, então vá para esta página, caso contrário, vá para a página de login
        include_once "config.php";
        $logout_id = mysqli_real_escape_string($conn, $_GET['logout_id']);
        if(isset($logout_id)){ // se o id de logout for definido
            $status = "Offline";
            // assim que o usuário sair, atualizar este status offline, e no formulário de login
            // atualizar novamente o status para ativo, se o usuário fizer login com sucesso
            $sql = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id={$_GET['logout_id']}");
            if($sql){
                session_unset();
                session_destroy();
                header("location: ../login.php");
            }
        }else{
            header("location: ../users.php");
        }
    }else{  
        header("location: ../login.php");
    }
?>