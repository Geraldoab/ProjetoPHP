<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Minha página</title>
    </head>
    <body>
        <form action="" method="post">
            <label>Usuário</label>
            <input type="text" name="usuario" />
            <br>
            <label>Senha</label>
            <input type="password" name="senha" />
            <br>
            <input type="submit" value="enviar">
        </form>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $usuario = $_POST["usuario"];
                $senha = $_POST["senha"];
                
                if(empty($usuario) || empty($senha)){
                    echo "Por favor informe o usuário e senha.";
                }
                else{
                    echo "O usuário é " . $usuario;
                }
            }
        ?>
    </body>
</html>
