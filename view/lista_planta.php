<?php
    session_start();
    include_once('../model/config.php');

    if((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true)) {   
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);
        header('Location: login.php');
        exit;
    }

    $logado = $_SESSION['usuario'];


?>
<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Plantas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/lista_planta.css">
</head>
<body>

<div class="cabecalho" id= "cabecalho">
        <img id="logo" src="../assets/img/logo 1.svg" alt="logo do site" >
            <div class="usuario-sair">
                <?php 
                    echo "<p class='usuario'><u>$logado</u></p>";
                ?>
                <a class="btn btn-outline btn-sm" href="../controller/sair.php">Sair</a>
            </div>
    </div>
    
<!--------------API de Libras--------------------->
<div vw class="enabled">
        <div vw-access-button class="active"></div>
            <div vw-plugin-wrapper>
                <div class="vw-plugin-top-wrapper"></div>
            </div>
    </div>
  
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script> new window.VLibras.Widget('https://vlibras.gov.br/app');</script>

    <script src="../assets/javascript/tab.js"></script>

</body>
</html>