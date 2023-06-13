<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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

        h1 {
            font-size: 24px;
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        .user {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 250px;
            height: 220px;
        }

        h4 {
            font-size: 16px;
            color: #666;
            margin: 0;
        }

        h6 {
            font-size: 14px;
            color: #333;
            margin: 0;
            margin-bottom: 10px;
        }

        span {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        button {
            font-size: 14px;
            padding: 8px 16px;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
            margin-right: 10px;
        }

        button.delete {
            background-color: #f44336;
        }

        button:hover {
            opacity: 0.8;
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
</head>

<body>
    <h1>Usuário atualizado com sucesso!</h1>
    <span>
        <div class="user">
            <h4>Nome:</h4>
            <h6>{{ $user->nome }}</h6>
            <h4>Email:</h4>
            <h6>{{ $user->email }}</h6>
            <h4>Hobbie:</h4>
            <h6>{{ $user->hobbieId }}</h6>
            <h4>Cidade:</h4>
            <h6>{{ $user->cidadeId }}</h6>
            <span>
                <button>Atualizar</button>
                <button class="delete">Deletar</button>
            </span>
        </div>
    </span>

    <span>
        <a href="{{ route('user.register') }}">Cadastrar Novo Usuário</a>
        <a href="{{ route('user.allUsers') }}">Listar todos os usuários</a>
    </span>
</body>

</html>
