<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projeto Desafio</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.1);
            }

            100% {
                transform: scale(1);
            }
        }

        .btn-link {
            background-color: #4caf50;
            color: #fff;
            padding: 15px 30px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            animation: pulse 2s infinite;
        }

        .btn-link:hover {
            background-color: #45a049;
            animation: none;
            /* Remover a animação ao passar o mouse */
        }
    </style>
</head>

<body class="antialiased">
    <button onclick="window.location.href='/registro'" class="btn-link">Ir para Projeto</button>
</body>

</html>
