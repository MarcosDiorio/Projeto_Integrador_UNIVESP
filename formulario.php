<?php
    if(isset($_POST['submit']))
    {
        //print_r('Nome: ' . $_POST['nome']);
        //print_r('<br>');
        //print_r('Email: ' . $_POST['email']);
        //print_r('<br>');
        //print_r('Telefone: ' . $_POST['telefone']);
        //print_r('<br>');
        //print_r('Sexo: ' . $_POST['genero']);
        //print_r('<br>');
        //print_r('Data de Nascimento: ' . $_POST['data_nascimento']);
        //print_r('<br>');
        //print_r('Cidade: ' . $_POST['cidade']);
        //print_r('<br>');
        //print_r('Estado: ' . $_POST['estado']);
        //print_r('<br>');
        //print_r('Endereço: ' . $_POST['endereco']);
        //print_r('<br>');
        
        include_once('config.php');

        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,email,telefone,sexo,data_nasc,cidade,estado,endereco) 
        VALUES('$nome','$senha','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");

        header('Location: tela-de-login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario | PI</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, #0081ad, #0069ae, #004eae);
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0,0,0,0.6);
            padding: 15px;
            border-radius: 15px;
            width: 25%;
        }
        fieldset{
            border: 3px solid #0081ad;
        }
        legend{
            border: 1px solid #0081ad;
            padding: 10px;
            text-align: center;
            background-color: #0081ad;
            border-radius: 5px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 12px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 10px;
            color: #0081ad ;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            position: center;
            width: 95%;
            text-align: center;
            font-size: 15px;
            letter-spacing:2px;
        }
        #submit{
            background-image: linear-gradient(45deg, #0081ad, #0069ae, #004eae);
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
            box-shadow: 2px 2px 2px 2.5px rgba(0,0,0,0.5);
        }
        #submit:hover{
            background-image: linear-gradient(180deg, #0081ad, #0069ae, #004eae);
        }
    </style>
</head>
<body>
    <a href="index.php">Voltar</a>
    <div class="box">
        <form action="formulario.php"method="POST">
            <fieldset>
                <legend><b>Formulario de Cadastro</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <laber for="nome" class="labelInput">Nome Completo</laber>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <laber for="senha" class="labelInput">Senha</laber>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <laber for="email" class="labelInput">Email</laber>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <laber for="telefone" class="labelInput">Telefone</laber>
                </div>
                <br>
                <p>Sexo:</p>
                <input type="radio" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <input type="radio" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <input type="radio" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <laber for="data_nascimento"><b>Data de Nascimento:</b></laber>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <laber for="cidade" class="labelInput">Cidade</laber>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <laber for="estado" class="labelInput">Estado</laber>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <laber for="endereco" class="labelInput">Endereço</laber>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset> 
        </form>      
    </div>
</body>
</html>