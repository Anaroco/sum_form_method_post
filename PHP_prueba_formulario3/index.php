<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <form method="post" action="ejercicio1.php">
        <label for="num1">Inserta el numero 1 </label>
        <input type= "number" id="num1" name="num1" />
    
        <label for="num2">Inserta el numero 2 </label>
        <input type= "number" id="num2" name="num2"/>

        <input type= "submit" name="enviar" value="Sumar"/>
        
    </form>

    <p>
        <?php 
        session_start();
        if (isset($_SESSION['resultado'])){
            echo $_SESSION['resultado'];
            session_destroy();

        }
        ?>
    </p>


</body>
</html>