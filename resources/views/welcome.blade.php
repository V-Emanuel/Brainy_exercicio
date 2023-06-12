<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brainy Digital - CRUD</title>
    <style>
        body {
            background-color: #b4d7dd;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        h2 {
            color: #1e5946;
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #e8f6ec;
            border-radius: 5px;
        }

        label {
            display: block;
            font-weight: bold;
            color: #1e5946;
            margin-bottom: 5px;
        }

        input[type="text"],
        select {
            display: block;
            width: 100%;
            padding: 8px;
            border: 1px solid #1e5946;
            border-radius: 3px;
            margin-bottom: 10px;
        }

        button {
            display: block;
            margin-top: 10px;
            background-color: #1e5946;
            border: none;
            border-radius: 3px;
            padding: 10px 20px;
            color: #fff;
            cursor: pointer;
        }

        button:hover {
            background-color: #238a63;
        }
    </style>
</head>

<body>
    <h2>Cadastrar novo usuário</h2>
    <form action="/cadastro" method="POST">
        @csrf
        <label for="">Nome:</label>
        <input placeholder="digite seu nome" name="nome">
        <br />
        <br />
        <label for="">Email:</label>
        <input placeholder="digite seu email" name="email">
        <br />
        <br />
        <select name="hobbie" id="hobbie">
            <option value="">Hobbies</option>
        </select>
        <br />
        <br />
        <select name="estado" id="estado">
            <option value="">Estado</option>
        </select>
        <br />
        <br />
        <select name="Cidade" id="Cidade">
            <option value="">Cidade</option>
        </select>
        <br />
        <br />
        <button>
            <p>CADASTRAR</p>
        </button>
    </form>

</body>

</html>
