<?php
session_start();

// Vérifier si les données du formulaire ont été soumises
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Récupérer les données du formulaire
  $email = $_POST["email"];
  $motdepasse = $_POST["motdepasse"];

  // Vérifier les informations de connexion
  if ($email == "example@gmail.com" && $motdepasse == "1227") {
    // Les informations de connexion sont correctes, rediriger l'utilisateur vers la page d'accueil
    $_SESSION["connecte"] = true;
    header("Location: accueil4.php");
    exit;
  } else {
    // Les informations de connexion sont incorrectes, afficher un message d'erreur
    $message = "Adresse e-mail ou mot de passe incorrect.";
  }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Page de connexion</title>
    <link rel="stylesheet" href="style.css"></link>
  </head>
  <body>
    <div class="mainContainer">
       <h1>Connexion</h1>
       <?php if (isset($message)) { echo "<p>$message</p>"; } ?>
       <form id="form1" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
       <label for="email">Adresse e-mail :</label>
       <input type="email" id="email" name="email" required><br><br>
       <label for="motdepasse">Mot de passe :</label>
        <input type="password" id="motdepasse" name="motdepasse" required><br><br>
       <input type="submit" value="Se connecter" id="btn-connected">
    </form>
    </div>
    
  </body>
</html>
