<!DOCTYPE html>
<html>
<head>
	<title>Enregistrer une matière</title>
</head>
<body>
	<h1>Enregistrer une matière</h1>
	<form  method="post" action="formulairemat.php">
		<label for="id_mat">ID de la matière:</label>
		<input type="text" id="id_mat" name="id_mat"><br><br>

		<label for="libelle">Libellé de la matière:</label>
		<input type="text" id="libelle" name="libelle"><br><br>

		<label for="volume_horaire">Volume horaire:</label>
		<input type="text" id="volume_horaire" name="volume_horaire"><br><br>

		<label for="matricule">Matricule de l'étudiant:</label>
		<input type="text" id="matricule" name="matricule"><br><br>

		<input type="submit" value="Enregistrer">
	</form>

    <?php
    
// Connexion à la base de données
$serveur = 'localhost';
$utilisateur = 'root';
$motdepasse = '';
$base_de_donnees = 'genie_logiciel';

$connexion = new mysqli($serveur, $utilisateur, $motdepasse, $base_de_donnees);

// Vérifier la connexion
if (!$connexion) {
	die("La connexion à la base de données a échoué: " . mysqli_connect_error());
}

// Récupérer les données du formulaire
$id_mat = $_POST['id_mat'];
$libelle = $_POST['libelle'];
$volume_horaire = $_POST['volume_horaire'];
$matricule = $_POST['matricule'];

// Préparer la requête SQL pour insérer les données dans la base de données
$sql = "INSERT INTO matiere (id_mat, libelle, volume_horaire, matricule) VALUES ('$id_mat', '$libelle', '$volume_horaire', '$matricule')";

// Exécuter la requête SQL
if (mysqli_query($connexion, $sql)) {
	echo "Les informations de la matière ont été enregistrées avec succès.";
} else {
	echo "Une erreur est survenue lors de l'enregistrement des informations de la matière: " . mysqli_error($connexion);
}

// Fermer la connexion à la base de données
mysqli_close($connexion);
?>

</body>
</html>
