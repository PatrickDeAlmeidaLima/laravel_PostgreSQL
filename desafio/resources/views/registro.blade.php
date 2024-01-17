<!DOCTYPE html>
<html>

<head>
    <title>Página de Registro</title>
</head>

<body>
    <h2>Registro de Usuário</h2>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="/registro">
        @csrf

        <label for="nome">Nome:</label>
        <input type="text" name="nome" value="{{ old('nome') }}" required minlength="3" maxlength="50">

        <label for="email">E-mail:</label>
        <input type="email" name="email" value="{{ old('email') }}" required>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" required minlength="6" maxlength="20">

        <label for="confirmar_senha">Confirmação de Senha:</label>
        <input type="password" name="confirmar_senha" required>

        <button type="submit">Registrar</button>
    </form>
</body>

</html>
