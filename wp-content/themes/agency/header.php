<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agency</title>
</head>

<body>
    <header>
        <div class="logo">
            <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
        </div>
        <nav>
            <?php wp_nav_menu(['theme_location' => 'main-menu']); ?>
        </nav>
    </header>
</body>

</html>