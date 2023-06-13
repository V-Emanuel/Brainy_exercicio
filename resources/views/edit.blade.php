<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brainy Digital - CRUD</title>
    <style>
        body {
            background-color: #f1f1f1;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        h2 {
            color: #000;
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
        }

        input {
            width: 370px;
            height: 30px;
        }

        label {
            display: block;
            font-weight: bold;
            color: #777;
            margin-bottom: 5px;
        }

        select {
            display: block;
            width: 100%;
            height: 40px;
            padding: 8px;
            border: none;
            border-radius: 3px;
            margin-bottom: 10px;
            color: #000;
            background-color: #b4d7dd;
            font-size: 16px;
        }

        button {
            display: block;
            margin-top: 10px;
            background-color: #4285f4;
            border: none;
            border-radius: 3px;
            padding: 10px 20px;
            color: #fff;
            cursor: pointer;
            text-decoration-line: none;
        }

        button:hover {
            background-color: #428aff;
        }
    </style>

</head>

<body>
    <h2>Atualizar Usuário {{ $user->nome }}</h2>
    <form action="{{ route('user.update', $user->id) }}" method="post">
        @method('PUT')
        @csrf
        <label for="">Nome:</label>
        <input placeholder="digite seu nome" name="nome" required type="text">
        <br />
        <br />
        <label for="">Email:</label>
        <input placeholder="digite seu email" name="email" required type="email">
        <br />
        <h4>Hobbies:</h4>
        <select name="hobbieId" id="">
            @foreach ($hobbies as $hobbie)
                <option value="{{ $hobbie->id }}" @required(true)>{{ $hobbie->hobbie }} </option>
            @endforeach
        </select>
        <h4>Estado:</h4>
        <select name="estado" id="estadoId" onchange="selecionaEstado()">
            @foreach ($estados as $estado)
                <option value="{{ $estado->id }}" @required(true)>{{ $estado->estado }}</option>
            @endforeach
        </select>
        <h4>Cidade:</h4>
        <label for="">
            <select name="cidadeId" id="cidadeId">
            </select>
        </label>
        <br />
        <button type="submit">
            <p>Atualizar</p>
        </button>
    </form>
    <script>
        const estados = {!! json_encode($estados) !!};
        const cidades = {!! json_encode($cidades) !!};

        function selecionaEstado() {
            const selectEstado = document.getElementById('estadoId').value;
            const selectCidade = document.getElementById('cidadeId');
            selectCidade.innerHTML = '';

            const fragment = document.createDocumentFragment();
            const filtraCidades = cidades.filter(cidade => cidade.estadoId === +selectEstado);

            for (const cidade of filtraCidades) {
                const option = document.createElement('option');
                option.value = cidade.id;
                option.text = cidade.cidade;
                option.required = true;
                fragment.appendChild(option);
            }

            selectCidade.appendChild(fragment);
        }

        selecionaEstado();
    </script>
</body>

</html>
