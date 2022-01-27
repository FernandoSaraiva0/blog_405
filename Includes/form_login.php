<?php
    $alerta = strlen($alertaLogin) ? '<p class="alert alert-danger">'.$alertaLogin.'</p>': ' ';
?>
<form method="POST">
        <div class="mx-auto mt-5 p-3" style="max-width: 350px; border-radius: 15%; border: solid 2px;">
            <h1 class="text-center">Login</h1>
            <?= $alerta ?>  
            <label class="form-label">Email: </label>
            <input class="form-control" type="email" placeholder="email" name="email">
            <label class="form-label">Senha: </label>
            <input class="form-control" type="password" placeholder="senha" name="senha">
            <div class="text-center">
                <button class="btn btn-primary mt-3" type="submit" name="logar">Logar</button>
            </div>
        </div>
    </form>