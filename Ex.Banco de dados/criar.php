<?php
    $host = "localhost";
    $db = "mybank";
    $user = "root";
    $pass = "123456";
    #conexao
    $mysqli = new mysqli($host, $user, $pass, $db);

    $nome = "";
    $email = "";
    $telefone = "";

    $error = "";
    $sucesso = "";


    if( $_SERVER['REQUEST_METHOD'] == 'POST'){
        $nome = $_POST['nome']; 
        $email = $_POST['email']; 
        $telefone = $_POST['telefone'];

        do {
            if(empty($nome) || empty($email) || empty($telefone)){
                $error = "Preencha todos os campos";
                break;
            }

            #inserindo cliente no banco
            $sql = "INSERT INTO usuarios (nome, email, telefone) ". "VALUES 
            ('$nome', '$email', '$telefone')";
            $result = $mysqli->query($sql);

            if(!$result) {
                $error = "Query Inválido" . $mysqli->error;
                break;
            }

            $nome = "";
            $email = "";
            $telefone = "";

            $sucesso = "Novo Usuario Adicionado!";

            header('Location: banco.php');
            exit;

        } while(false);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container my-5">
        <h2>Novo Usuario</h2>

        <?php
        //Criando o alerta caso esteja null os campos
        if ( !empty($error)) {
            echo "
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>$error</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' arial-label='Close'></button>
            </div>
            ";
        }
        ?>
        <form method="POST">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Name: </label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="nome" value="<?php echo $nome ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Email: </label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" name="email" value="<?php echo $email ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Telefone: </label>
                <div class="col-sm-6">
                    <input type="number" class="form-control" name="telefone" value="<?php echo $telefone ?>">
                </div>
            </div>

            <?php
                if (!empty($sucesso)){
                    echo "
                    <div class='row mb-3'>
                        <div class='offset-sm-3 col-sm-6'>
                            <div class='alert alert-sucess alert-dismissible fade show' role='alert'>
                                <strong>$sucesso</strong>
                                <button type='button' class='btn-close' data-bs-dismiss='alert' arial-label='Close'></button>
                            </div>
                        </div>
                    </div>
                    ";
                }
            ?>

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="banco.php" role="button">Cancelar</a>
                </div>
            </div>
        </form>
    </div>
    
</body>
</html>
