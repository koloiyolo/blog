<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="planets/planet.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $planet->name ?></title>
</head>

<body>
    <div class="contents">
        <div class="sidebar">
            <h2>
            <?php echo strtoupper($planet->name) ?>
            </h2>
            <img src=<?php echo $planet->get_image_path() ?>>
            <div class="text">
                Order:  <?php echo $planet->order ?>
            </div>
            <div class="text">
                Moons:  <?php echo $planet->moons ?>
            </div>
            <div class="text">
                Size:  <?php echo $planet->size ?>
            </div>
            <div class="text">
                Life:  <?php echo $planet->get_life() ?>
            </div>
            <div class="text">
                Water:  <?php echo $planet->get_water() ?>
            </div>
        </div>
        <div class="main">
            <h2>
                <?php echo $planet->name?> description
            </h2>
            <div class="text">
                <?php echo $planet->description ?>
            </div>
        </div>
    </div>
</body>

</html>