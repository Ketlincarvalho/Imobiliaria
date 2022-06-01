<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form name="cadImovel" id="cadImovel" action="" method="post">
        Descrição: <input type="text" name="descricao" id="descricao"><br/>
        Valor: <input type="text" name="valor1" id="valor1"><br/>
        Tipo: <input type="text" nome="tipo2" id="tipo2"><br/>
        Foto: <input type="file" nome="foto2" id="foto2"><br/>
        <select name="permissao" id="permissao">
            <option value="0"></option>
            <option value="A">1</option>
            <option value="C">2</option>
        </select><br/><br/>
        <input type="submit" name="btnSalvar" id="btnSalvar">
    </form>

</body>
</html>
<?php

if(isset($_POST['btnSalvar'])){

    require_once '../controller/ImovelController.php';
    call_user_func(array('ImovelController','salvar'));

}


?>