<?php

/*

Snack 2
Con un form passare come parametri GET name, mail e age
 e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri
 , che mail contenga un punto e una chiocciola e 
 che age sia un numero.
  Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

*/

var_dump($_GET);

$user_name = $_GET["name"];
$user_email = $_GET["mail"];
$user_age = $_GET["age"];

/*


*/

 
if (strlen($user_name) > 3 && str_contains($user_email, "@")&& str_contains($user_email, ".") && is_numeric($user_age) ) {
    echo 'accesso riuscito' . $user_name . $user_email . $user_age ;
} else {
    echo 'accesso negato';
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>

    <h1>Send your name, mail and age</h1>
    
<form action="" method="get">
    <input type="text" name="name" placeholder="Insert your name">
    <input type="text" name="mail" placeholder="Insert your mail">
    <input type="text" name="age" placeholder="Insert your age">
    <button type="submit">Invia</button>


</form>

</body>
</html>