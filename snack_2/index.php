<?php
if (isset($_GET['name'], $_GET['email'], $_GET['age'])) {
    $name = $_GET['name'];
    $email = $_GET['email'];
    $age = $_GET['age'];
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SNACK 2</title>
</head>

<body>
    <!-- Prendere i dati in input -->
    <form action="index.php" method="GET">
        <input type="text" name="name" id="name">
        <input type="text" name="email" id="email">
        <input type="text" name="age" id="age">
        <input type="submit" value="ACCEDI">

        <?php if (isset($name, $email, $age)) { ?>
            <div><?php echo $name ?></div>
            <div><?php echo $email ?></div>
            <div><?php echo $age ?></div>
            <div>
                <?php 
                    if (strlen($name) > 3 
                        && str_contains($email, '@') 
                        && str_contains($email, '.' ) 
                        && is_numeric($age)) {
                            
                        echo 'Accesso riuscito';
                    }else{
                        echo 'Accesso negato';
                    }
                ?>
            </div>
        <?php } ?>
    </form>
</body>

</html>