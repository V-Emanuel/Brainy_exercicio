<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 20px;
    }

    h1 {
        color: #333;
    }

    a {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 10px;
        width: 250px;
        height: 60px;
        padding: 10px 20px;
        font-size: 16px;
        color: #fff;
        background-color: #4CAF50;
        border-radius: 4px;
        cursor: pointer;
        text-decoration-line: none;
    }

    a:hover {
        background-color: #45a049;
    }

    a:focus {
        outline: none;
        box-shadow: 0 0 0 3px rgba(0, 0, 0, 0.2);
    }
</style>

<body>
    <h1>Selecione o que deseja realizar:</h1>
    <a href="{{ url('/user/register') }}">Cadastrar Novo Usuário</a>
    <a href="{{ url('/user/allUsers') }}">Listar todos os usuários</a>
</body>

</html>
