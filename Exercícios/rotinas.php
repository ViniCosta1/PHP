<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotina PHP</title>
</head>
<body>
    <h2>Título</h2>
    <form action="rotina.php" method="post">
        Valor 1 = <input type="number" name="n1" id="n1"> <br>
        Valor 2 = <input type="number" name="n2" id="n2"> <br>
        Valor 3 = <input type="number" name="n3" id="n3"> <br>
        <button type="submit" name="enviar">Enviar</button>
    </form>

<?php
if(isset($_POST[$enviar])){
    $x = $_POST['n1'];
    $y = $_POST['n2'];
    $z = $_POST['n3'];
    function Tabuada($x, $y, $z) {
        
    }
}
?>
</body>
</html>