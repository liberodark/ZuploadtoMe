<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head>
        <title>Password protected website</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    </head>
    <body>
        <p>Please enter the password :</p>
        <form action="secret.php" method="post">
            <p>
            <input type="password" name="mot_de_passe" />
            <input type="submit" value="Valider" />
            </p>
        </form>
        <p>This page is for administrators</p>
    </body>
</html>
