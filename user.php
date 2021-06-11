<!DOCTYPE html>
<html lang='fr'>
	<head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>PHP ex 7.1 URL Server</title>
    </head>
    <body>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            $usedMethod='POST';
        }
        else
        {
            $usedMethod='GET';
        }
        $lastName=$_REQUEST['lastname'];
        $firstName=$_REQUEST['firstname'];
        echo ("PHP server script: ".__FILE__);
        ?>
        <p>Should receive parameters with the <?= $usedMethod ?> method</p>
        <p>test_url.php?lastname=<?= $lastName ?>&firstname=<?= $firstName ?></p>
    </body>
</html>