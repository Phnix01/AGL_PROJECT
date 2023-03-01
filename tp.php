<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello</title>
</head>
<body>
    <?php
// informations de connexion à la base de données
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'genie_logiciel';

// création de la connexion à la base de données
$conn = mysqli_connect($host, $user, $password, $dbname);

// vérification de la connexion

/*if($conn){
    echo 'Connexion ok';
}else{
    echo 'Erreur connexion'.mysqli_connect_error();
}*/

?>
<form method="post" action="formulaire.php">
</body>
</html>