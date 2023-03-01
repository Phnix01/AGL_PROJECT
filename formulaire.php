<!DOCTYPE html>
<html>
<head>
	<title>Formulaire d'enregistrement d'étudiant</title>
</head>
<body>
	<h1>Formulaire d'enregistrement d'étudiant</h1>
	<form method="POST" action="formulaire.php">
		<label for="matricule">Matricule:</label>
		<input type="number" id="matricule" name="matricule" required><br><br>
		<label for="nom">Nom:</label>
		<input type="text" id="nom" name="nom" required><br><br>
		<label for="prenom">Prénom:</label>
		<input type="text" id="prenom" name="prenom" required><br><br>
		<label for="age">Âge:</label>
		<input type="number" id="age" name="age" required><br><br>
		<input type="submit" value="Enregistrer">
	</form>
    <?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les valeurs des champs du formulaire
    $matricule = $_POST["matricule"];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $age = $_POST["age"];
    
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
    
    // Préparer la requête SQL pour insérer les données de l'étudiant dans la base de données
    $sql = "INSERT INTO etudiant (matricule, nom, prenom, age) VALUES ('$matricule', '$nom', '$prenom', '$age')";
    
    // Exécuter la requête SQL
    if ($conn->query($sql) === TRUE) {
        echo "Les informations de l'étudiant ont été enregistrées avec succès.";
    } else {
        echo "Erreur lors de l'enregistrement des informations de l'étudiant: " . $conn->error;
    }
    
   
}
/*if(isset($_POST['modifier'])){
    if ($conn){
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $age=$_POST['age'];
        $matricule=$_POST['matricule'];
        $requete="UPDATE genie_logiciel set nom='".$nom."', prenom='".$prenom."', age=".$age. WHERE matricule=.$matricule;
        $execute=mysqli_query($conn, $requete);

        if($execute){
            header('modification faite avec succes');
        }else{
            header('Erreur modification'.mysqli_error($con));
        }

    }else{
        die ('Erreur connexion'.mysqli_connect_error());
    }
}
     // Fermer la connexion à la base de données
     $conn->close();
?>*/ 
?>
<?php

/*
// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer les valeurs du formulaire
    $matricule = $_POST['matricule'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];

    // Préparer et exécuter la requête de mise à jour
    $sql = 'UPDATE etudiant SET matricule =$matricule, nom = $nom, prenom = $prenom, age =$age WHERE matricule =$matricule';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssssi', $matricule, $nom, $prenom, $age,$matricule);
    $stmt->execute();

    // Rediriger vers la page d'accueil après la mise à jour
    header('Location: accueil4.php');
    exit();
}

// Récupérer les informations de l'étudiant à partir de la base de données
$sql = 'SELECT * FROM etudiant WHERE matricule =$matricule';
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $id);
$stmt->execute();
$result = $stmt->get_result();

// Vérifier si l'étudiant existe
if ($result->num_rows == 0) {
    // Rediriger vers la page d'accueil si l'étudiant n'existe pas
    header('Location: accueil4.php');
    exit();
}

// Récupérer les informations de l'étudiant
$etudiant = $result->fetch_assoc();
*/
?>
  
</body>
</html>
