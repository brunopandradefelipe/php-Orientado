<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .form {
            margin-top: 7% !important;
            margin: auto;
            width: 30%;
            background-color: skyblue;
            min-height: 250px;
            border-radius: 10px;
            padding: 20px;
        }

        input {
            width: 100%;
            height: 25px;
        }

        input:focus {
            outline: 0;
        }

        .block {
            display: block;
            padding-left: 5%;
            padding-right: 5%;
        }

        button {
            margin-top: 20px;
            height: 50px;
            width: 100%;
        }
    </style>
</head>

<body>
    <form action="action/mostraDados.php">
        <div class="form">
            <div class="block">
                <label for="nome">Nome:</label><br>
                <input type="text" id="nome" name="nome">
            </div>
            <div class="block">
                <label for="idade">Idade:</label><br>
                <input type="text" id="idade" name="idade">
            </div>
            <div class="block">
                <label for="email">E-mail:</label><br>
                <input type="text" id="email" name="email">
            </div>
            <div class="block">
                <button name="enviar" type="submit">Enviar</button>
            </div>
        </div>
    </form>
</body>

</html>