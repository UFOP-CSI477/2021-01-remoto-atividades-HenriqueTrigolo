<?php
    $radio = $_POST["radiovaga"];
    date_default_timezone_set('America/Sao_Paulo');    
    $entrada = date('H:i:s');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="BS.css">
    <script src="api.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
</head>
<body onload="iniciaRelogio(false)">
    <h1>Hora De acesso: 
        <input type="text" class="timer" disabled> 
    </h1>
    
    <h1>vaga: <?php echo $radio ?> Hora: <?php echo $entrada?></h1>

</body>
</html>