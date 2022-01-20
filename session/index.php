<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            max-width: 400px;
            margin: 0 auto;
            padding: 10px;
        }
        form{
            display: flex;
            flex-direction: column;
        }
        form label, input{
            margin-top: 5px;
            padding: 10px;
        }
        form button{
            margin-top: 10px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div>
        <form action="login.php" method="POST">
            <h4>Login</h4>
            <label>Login</label>
            <input type="text" name="usr" id="usr">
            <label>Senha</label>
            <input type="password" name="pass" id="pass">
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>
    