<?php
    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
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
<body onload="iniciaRelogio(true)">
    <form action="confirmacao.php" method="post">
        <h1>Selecione a vaga onde o carro será estacionado</h1>
        <h2>Marca: <?php echo $marca ?> Modelo: <?php echo $modelo?> </h2>
        <h2>Hora Atual: 
            <input type="text" class="timer" name="hora" disabled>
        </h2>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <label>Vaga 1</label>
                    <input type="text" disabled>
                    <input type="radio" name="radiovaga" value="1">
                </div>
                <div class="col-4">
                    <label>Vaga 2</label>
                    <input type="text" disabled>
                    <input type="radio" name="radiovaga" value="2">
                </div>
                <div class="col-4">
                    <label>Vaga 3</label>
                    <input type="text" disabled>
                    <input type="radio" name="radiovaga" value="3" >
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <label>Vaga 4</label>
                    <input type="text" disabled>
                    <input type="radio" name="radiovaga" value="4">
                </div>
                <div class="col-4">
                    <label>Vaga 5</label>
                    <input type="text" disabled>
                    <input type="radio" name="radiovaga" value="5">
                </div>
                <div class="col-4">
                    <label>Vaga 6</label>
                    <input type="text" disabled>
                    <input type="radio" name="radiovaga" value="6">
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <label>Vaga 7</label>
                    <input type="text" disabled>
                    <input type="radio" name="radiovaga" value="7">
                </div>
                <div class="col-4">
                    <label>Vaga 8</label>
                    <input type="text" disabled>
                    <input type="radio" name="radiovaga" value="8">
                </div>
                <div class="col-4">
                    <label>Vaga 9</label>
                    <input type="text" disabled>
                    <input type="radio" name="radiovaga" value="9">
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <label>Vaga 10</label>
                    <input type="text" disabled>
                    <input type="radio" name="radiovaga" value="10">
                </div>
                <div class="col-4">
                    <label>Vaga 11</label>
                    <input type="text" disabled>
                    <input type="radio" name="radiovaga" value="11">
                </div>
                <div class="col-4">
                    <label>Vaga 12</label>
                    <input type="text" disabled>
                    <input type="radio" name="radiovaga" value="12">
                </div>
            </div>    
            
        </div>
        <input type="submit" value="enviar">
    </form>
</body>

<!--
<body>
    <h1>Selecione a vaga onde o carro será estacionado</h1>

    <form action="">

    <div class="col-md-6">
        <input type="button" class="button radio" name="button1" id="button1" value="button1" onClick="toggleButton(this)">
        <input type="button" class="button radio" name="button2" id="button2" value="button2" onClick="toggleButton(this)">
        <input type="button" class="button radio" name="button3" id="button3" value="button3" onClick="toggleButton(this)">
        <input type="button" class="button radio" name="button4" id="button4" value="button4" onClick="toggleButton(this)">
    </div>
    <div class="col-md-6">
        <input type="button" class="button radio" name="button1" id="button1" value="button1" onClick="toggleButton(this)">
        <input type="button" class="button radio" name="button2" id="button2" value="button2" onClick="toggleButton(this)">
        <input type="button" class="button radio" name="button3" id="button3" value="button3" onClick="toggleButton(this)">
        <input type="button" class="button radio" name="button4" id="button4" value="button4" onClick="toggleButton(this)">
    </div>
    <div class="col-md-6">
        <input type="button" class="button radio" name="button1" id="button1" value="button1" onClick="toggleButton(this)">
        <input type="button" class="button radio" name="button2" id="button2" value="button2" onClick="toggleButton(this)">
        <input type="button" class="button radio" name="button3" id="button3" value="button3" onClick="toggleButton(this)">
        <input type="button" class="button radio" name="button4" id="button4" value="button4" onClick="toggleButton(this)">
    </div>
    <div class="col-md-6">
        <input type="button" class="button radio" name="button1" id="button1" value="button1" onClick="toggleButton(this)">
        <input type="button" class="button radio" name="button2" id="button2" value="button2" onClick="toggleButton(this)">
        <input type="button" class="button radio" name="button3" id="button3" value="button3" onClick="toggleButton(this)">
        <input type="button" class="button radio" name="button4" id="button4" value="button4" onClick="toggleButton(this)">
    </div>

    <input type="submit" value="Enviar">

    </form>


</body>
-->
</html>