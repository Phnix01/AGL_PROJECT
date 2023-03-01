
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
   
 </head>
 <img src="C:\xampp\htdocs\img\image.jpg" alt="Mon image d'en-tête">
 <body>
    <div class="mainContainer">
    <form id="form2" method="post">
           <label for="matricule">Matricule :</label>
           <input type="text" name="matricule" placeholder=" veuillez saisir votre matricule" required>
           <input id="btn-connected" type="submit" value="Afficher mes notes">
     </form>
    <!-- Création des boutons de redirection -->
<form action="formulaire.php">
    <input type="submit" value="Etudiant">
</form>

<form action="formulairemat.php">
    <input type="submit" value="Matière">
</form>

<form action="formulairenot.php">
    <input type="submit" value="Note">
</form>
     <?php
// Connexion à la base de données
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$basededonnees = "genie_logiciel";
$conn = mysqli_connect($serveur, $utilisateur,$motdepasse, $basededonnees);

// Vérification de la connexion
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Traitement du formulaire
if (isset($_POST['matricule'])) {
    $matricule = $_POST['matricule'];

    // Requête pour récupérer les informations de l'étudiant
    $sql_etudiant = "SELECT * FROM etudiant WHERE matricule = '$matricule'";
    $result_etudiant = mysqli_query($conn, $sql_etudiant);
    $row_etudiant = mysqli_fetch_assoc($result_etudiant);

    // Requête pour récupérer les notes de l'étudiant
    $sql_notes = "SELECT matiere.libelle, note.lib_note
                  FROM matiere 
                  INNER JOIN note ON matiere.id_mat = note.id_mat 
                  WHERE note.matricule = '$matricule'";
    $result_notes = mysqli_query($conn, $sql_notes);

    // Affichage des résultats dans un tableau HTML
    $idTable = 'table1';
    echo "<h2>Résultats pour l'étudiant ".$row_etudiant['nom']." ".$row_etudiant['prenom']." (matricule : ".$row_etudiant['matricule'].")</h2>";
    echo "<table id='$idTable'><tr><th>Matière</th><th>Note</th></tr>";
    while ($row_notes = mysqli_fetch_assoc($result_notes)) {
        echo "<tr><td>". '&nbsp;&nbsp;&nbsp;'.$row_notes['libelle'].'&nbsp;&nbsp;&nbsp;'."</td><td>".'&nbsp;&nbsp;&nbsp;'.$row_notes['lib_note'].'&nbsp;&nbsp;&nbsp;'."</td></tr>";
    }
    echo "</table>";
}
?>
    </div>
     
 </body>
 </html>

