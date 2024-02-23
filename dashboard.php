<?php
session_start();
if(empty($_SESSION)){
    print "<script>location.href='index.php'</script>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body style="background-color: grey;">

    <nav class="navbar navbar-light bg-light">

        <div class="container-fluid">
            <a class="navbar-brand">Sistema X</a>

            <?php print "Olá, " . $_SESSION["nome"];
            print " <a href='logout.php' class= 'btn btn-danger'>SAIR</a>"
            ?>

        </div>

    </nav>



<script src="js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
</body>

</html>