<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<!-- header -->
    <header>
        <img src="img/logo.png" alt="logo">
    </header>

<?php 
    include __DIR__.'/database/database.php';
?>

<!-- main -->
    <main>
        <div class="container">
        <?php
            foreach ($database as $album){
        ?>
            <div class="card-album">
                <img src="<?php echo $album['poster']?>" alt="">
                <h3 class="title"><?php echo $album['title']?></h3>
                <p class="author"><?php echo $album ['author']?></p>
                <p class="year"><?php echo $album ['year']?></p>
            </div>
        <?php } ?>
        </div>
    </main>
</body>
</html>