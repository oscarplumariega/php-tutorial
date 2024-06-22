<?php

require 'env.php';
require 'userClass.php';

/*$person1 = new User('Oscar', 26);
$person1->setName('Pedro');
$person1->sayHello();*/

//phpinfo();
$mysqli = new mysqli("localhost", $username, $password, $database);

$var = 'Listado notas';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h3><?php echo $var ?></h3>
    <form action="index.php" method="post">
        <input type="float" name="miNota" id="miNota">
        <input type="submit">
    </form>
</body>
</html>

<?php 

if(isset($_POST["miNota"])){
    $miNota = $_POST['miNota'];

    $query = $mysqli->query("SELECT * FROM grados_notas where notaCorte <= $miNota");

    echo '<table border="0" cellspacing="2" cellpadding="2">';
    if ($result = $query) {
    
        /* fetch object array */
        while ($obj = $result->fetch_object()) {
            echo '<tr>';
            echo '<td>'.$obj->grado.'</td>';
            echo '<td>'.$obj->notaCorte.'</td>';
            echo '<td>'.$obj->universidad.'</td>';
            echo '<td>'.$obj->plazas.'</td>';
            echo '<td>'.$obj->anioPromocion.'</td>';
            echo '</tr>';
        }

    }
    echo '</table>';
}else{
    $queryAll = $mysqli->query("SELECT * FROM grados_notas");

    echo '<table border="0" cellspacing="2" cellpadding="2">';
    if ($result = $queryAll) {
    
        /* fetch object array */
        while ($obj = $result->fetch_object()) {
            echo '<tr>';
            echo '<td>'.$obj->grado.'</td>';
            echo '<td>'.$obj->notaCorte.'</td>';
            echo '<td>'.$obj->universidad.'</td>';
            echo '<td>'.$obj->plazas.'</td>';
            echo '<td>'.$obj->anioPromocion.'</td>';
            echo '</tr>';
        }

    }
    echo '</table>';
}
