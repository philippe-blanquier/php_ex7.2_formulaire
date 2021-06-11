<!DOCTYPE html>
<html lang="fr">
	<head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>PHP ex 7.1 URL Client</title>
    </head>
    <body >
        <!--
            Créer un formulaire demandant le nom et le prénom. 
            Ce formulaire doit rediriger vers la page user.php avec la méthode GET.
        -->
        <p>Veuillez vous identifier</p>
        <form action="user.php" method="post">
            <label for="lastname">Nom :</label>
			<input type="string" name="lastname" placeholder="nom" required>
            <label for="firstname">Prénom :</label>
			<input type="string" name="firstname" placeholder="prénom" required>
            <input type="submit" value="OK">
        </form>
    </body>
</html>