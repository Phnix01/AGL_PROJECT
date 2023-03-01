<!DOCTYPE html>
<html>
<head>
	<title>Formulaire Note</title>
</head>
<body>
	<h1>Ajouter une nouvelle note</h1>
	<form method="post" action="formulairenot.php">
		<label for="id_note">ID Note:</label>
		<input type="text" name="id_note" required><br><br>

		<label for="lib_note">Libellé Note:</label>
		<input type="text" name="lib_note" required><br><br>

		<label for="matricule">Matricule Étudiant:</label>
		<input type="text" name="matricule" required><br><br>

		<label for="id_mat">ID Matière:</label>
		<input type="text" name="id_mat" required><br><br>

		<input type="submit" name="submit" value="Enregistrer">
	</form>
    <?php
// Connexion à la base de données

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'genie_logiciel';
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Vérifier si la connexion à la base de données a réussi
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

// Récupérer les données envoyées via le formulaire
$id_note = $_POST['id_note'];
$lib_note = $_POST['lib_note'];
$matricule = $_POST['matricule'];
$id_mat = $_POST['id_mat'];

// Préparer et exécuter la requête SQL pour insérer les données dans la table "notes"
$sql = "INSERT INTO note (id_note, lib_note, matricule, id_mat) VALUES ('$id_note', '$lib_note', '$matricule', '$id_mat')";

if (mysqli_query($conn, $sql)) {
	echo "La note a été ajoutée avec succès.";
} else {
	echo "Erreur: " . mysqli_error($conn);
}

// Fermer la connexion à la base de données
mysqli_close($conn);
?>

</body>
</html>
