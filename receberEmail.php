<?php

$email = $_REQUEST["emailUsuario1"];

if($email == ""){
echo "<h1>Email não foi inserido!</h1>";
exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> O email <?php echo $email; ?> foi cadastrado com sucesso!</h1>
</body>
</html>