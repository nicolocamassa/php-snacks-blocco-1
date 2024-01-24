<?php 
    $posts = [
        '27/09/2035' => [
            'post_id' => 'post 1',
            'username' => 'Gianni',
            'description' => 'Post description 1'
        ],
        '12/09/2042' => [
            'post_id' => 'post 2',
            'username' => 'Piero',
            'description' => 'Post description 2'
        ],
        '13/08/2073' => [
            'post_id' => 'post 3',
            'username' => 'Paolo',
            'description' => 'Post description 3'
        ],
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SNACK 3</title>
</head>
<body>
    <?php foreach($posts as $date => $post){ ?>
        <div style="margin-top: 20px;"><?php echo $date; ?></div> 
        <?php foreach($post as $key => $value) { ?>
            <div><?php echo $value; ?></div>
        <?php } ?>
        
    <?php } ?>
    <!-- TODO: -->
    <!-- Prendere la key con la data da post  -->
    <!-- Per ogni chiave prendere le informazioni dei post -->
</body>
</html>