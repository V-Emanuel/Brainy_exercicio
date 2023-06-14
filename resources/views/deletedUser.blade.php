<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        display: flex;
        align-content: center;
        justify-content: center;
        flex-direction: column;
        width: 100vw;
    }

    span {
        display: flex;
        justify-content: center;
        margin-top: 20px;
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
        margin-right: 20px;
    }
</style>

<body>
    <h1>Usuário Deletado com Sucesso!</h1>
    <span>
        <a href="{{ route('user.register') }}">Cadastrar Novo Usuário</a>
        <a href="{{ route('user.allUsers') }}">Listar todos os usuários</a>
    </span>
</body>

</html>
