<?php 
    $posts = [
        '27/09/2035' => [
            [
                'post_id' => 'post 1',
                'username' => 'Gianni',
                'description' => 'Post description 1'
            ],
            [
                'post_id' => 'post 1.2',
                'username' => 'Gianni',
                'description' => 'Post description 2'
            ],
        ],
        '12/09/2042' => [
            [
                'post_id' => 'post 2',
                'username' => 'Piero',
                'description' => 'Post description 2'
            ],
        ],
        '13/08/2073' => [
            [
                'post_id' => 'post 3',
                'username' => 'Paolo',
                'description' => 'Post description 3'
            ],
            [
                'post_id' => 'post 4',
                'username' => 'Mario',
                'description' => 'Post description 4'
            ],
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
    <?php foreach($posts as $date => $postList){ ?>
        <div style="margin-top: 20px;"><?php echo $date; ?></div> 
        <?php foreach($postList as $post) { ?>
            <div>
                <div><?php echo $post['post_id']; ?></div>
                <div><?php echo $post['username']; ?></div>
                <div><?php echo $post['description']; ?></div>
            </div>
        <?php } ?>
    <?php } ?>
</body>
</html>
