<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Registro</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .organizacao {
            width: 100%;
            max-width: 500px;
            min-width: 300px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 50px auto;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #45a049;
        }

        .error {
            color: red;
            margin-bottom: 10px;
        }

        .success {
            color: green;
            margin-bottom: 10px;
        }

        .btn-link {
            display: inline-block;
            margin-top: 10px;
            text-decoration: none;
            padding: 8px 16px;
            background-color: #3336e0;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-link:hover {
            background-color: #3819c4;
        }
    </style>
</head>

<body>
    <div class="organizacao">


        <form method="post" action="/registro">
            @csrf

            <h2>Registro de Usuário</h2>

            @if ($errors->any())
                <div class="error">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (session('success'))
                <div class="success">
                    {{ session('success') }}
                </div>
            @endif

            <label for="nome">Nome:</label>
            <input type="text" name="nome" value="{{ old('nome') }}" required minlength="3" maxlength="50">

            <label for="email">E-mail:</label>
            <input type="email" name="email" value="{{ old('email') }}" required>

            <label for="senha">Senha:</label>
            <input type="password" name="senha" required minlength="6" maxlength="20">

            <label for="confirmar_senha">Confirmação de Senha:</label>
            <input type="password" name="senha_confirmation" required>

            <button type="submit">Registrar</button>
            <button onclick="window.location.href='/usuarios'" class="btn-link">Ir para Usuários</button>
        </form>

        
        
    </div>
</body>

</html>
