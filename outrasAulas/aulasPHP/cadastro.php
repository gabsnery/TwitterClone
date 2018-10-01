<?php

    if (isset($_POST['nome']) && empty($_POST['nome']) ){
        echo "Nome" ;
    }
   // isset($_POST['nome']) == true ? echo $_POST['nome'] : ;
?>

<form method="post" action="">
    <label for="nome">Nome Completo:
        <input type="text" name = "nome">
    </label>

    <label for="nome">CPF:
        <input type="text" name = "cpf">
    </label>

    <input type="submit" value="cadastro">
</form>