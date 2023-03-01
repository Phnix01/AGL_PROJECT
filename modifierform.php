
<!DOCTYPE html>
<html>
<head>
    <title>Modifier un étudiant</title>
</head>
<body>
    <h1>Modifier un étudiant</h1>
    <form method="POST" action="formulaire.php">
        <label for="matricule">Matricule:</label>
        <input type="text" id="matricule" name="matricule" value="<?php echo $etudiant['matricule']; ?>">
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" value="<?php echo $etudiant['nom']; ?>">
        <label for="prenom">Prénom:</label>
        <input type="text" id="prenom" name="prenom" value="<?php echo $etudiant['prenom']; ?>">
        <label for="age">Âge:</label>
        <input type="number" id="age" name="age" value="<?php echo $etudiant['age']; ?>">
        <button type="submit">Enregistrer</button>
    </form>
</body>
</html>
