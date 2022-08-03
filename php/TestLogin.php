<?php
    session_start();

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        //Acessa
        include_once('config.php');

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        /*
        print_r('Email: ' . $email);
        print_r('<br>');
        print_r('Senha: ' . $senha);
        */

        $sql = "SELECT * FROM Usuarios WHERE email = '$email' and senha = '$senha' "; 

        
        $result = $conexao->query($sql); 

        /*
        print_r($result);
        */

        if(mysqli_num_rows($result) < 1)
        {
            /*
            print_r('Não existe');
            */
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        }
        else
        {
            /*
            print_r('Existe');
            */
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;

            header('Location: sistema.php');
        }
    }
    else
    {

        //Não Acessa
        header('Location: login.php');
    }
?>
