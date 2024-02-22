<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body style="background-color: grey;">

    <div style="width: 100%; height:100vh; align-items: center; justify-content: center; display:flex" class="login"> 

        <div class="container">

            <div class="row">

                <div class="col-lg-4 offset-lg-4">

                    <div class="card">

                        <div class="card-body">

                            <h3>Acesso restrito</h3>

                            <form action="login.php" method="POST">

                                <div>

                                    <div class="mb-3">
                                        <label for="">Usuário</label>
                                        <input type="text" name="usuario" class="form-control">
                                    </div>

                                </div>
                                <div>

                                    <div class="mb-3">
                                        <label for="">Senha</label>
                                        <input type="password" name="senha" class="form-control">
                                    </div>

                                </div>
                                <div>

                                    <div class="mb-3">

                                        <button type="submit" class="btn btn-primary">Enviar</button>

                                    </div>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

    </div>



    <script src="js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>