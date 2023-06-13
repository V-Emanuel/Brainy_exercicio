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
            background-color: #f1f1f1;
            margin: 0;
            padding: 20px;
        }

        p {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            text-align: center;
            margin-bottom: 30px;
        }

        .users {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .user {
            width: 250px;
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            margin: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h4 {
            font-size: 16px;
            font-weight: bold;
            color: #555;
            margin: 0;
        }

        h6 {
            font-size: 14px;
            color: #777;
            margin: 5px 0;
        }

        span {
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
        }

        .put,
        .delete {
            padding: 8px 16px;
            font-size: 14px;
            font-weight: bold;
            color: #fff;
            background-color: #4285f4;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration-line: none;
        }

        .register {
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
            text-decoration-line:
        }

        button:hover {
            background-color: #3367d6;
        }

        .delete {
            background-color: #a00000;
        }

        .delete:hover {
            background-color: #640000;
        }
    </style>
</head>

<body>
    <p>Todos os usuários cadastrados</p>
    <div class="users">
        @foreach ($usuarios as $u)
            <div class="user">
                <h4>Nome:</h4>
                <h6>{{ $u->nome }}</h6>
                <h4>Email:</h4>
                <h6>{{ $u->email }}</h6>
                <h4>Hobbie:</h4>
                <h6>{{ $u->hobbieId }}</h6>
                <h4>Cidade:</h4>
                <h6>{{ $u->cidadeId }}</h6>
                <span>
                    <a class="put" href="{{ url('user/edit', $u->id) }}">Atualizar</a>
                    <a class="delete">Deletar</a>
                </span>
            </div>
        @endforeach

    </div>
    <a class="register" href="{{ url('/user/register') }}">Cadastrar Novo Usuário</a>

</body>

</html>
