<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <h2>Lista de Usuarios</h2>
        <a href="criar.php" class="btn btn-primary" role="button">Novo Cliente</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $host = "localhost";
                $db = "mybank";
                $user = "root";
                $pass = "123456";
                
                $mysqli = new mysqli($host, $user, $pass, $db);
                if($mysqli->connect_errno){
                    die("Falha na conexão com o banco de dados!! ");
                }

                $sql = "SELECT * FROM usuarios";
                $result = $mysqli->query($sql);

                while($usr = mysqli_fetch_assoc($result)){
                    echo "
                    <tr>
                        <td>$usr[id]</td>
                        <td>$usr[nome]</td>
                        <td>$usr[email]</td>
                        <td>$usr[telefone]</td>
                        <td></td>
                    </tr>
                    ";
                }

                ?>

            </tbody>          
        </table>
    </div>
</body>
</html>