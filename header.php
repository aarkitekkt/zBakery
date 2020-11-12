<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <?php wp_head(); ?>
</head>

<body>
<header>
    <nav class="navbar navbar-expand-sm navbar-dark">
        <a class="navbar-brand" href="<?php echo site_url()?>"><img id="navLogo" src="<?php echo get_theme_file_uri('/images/logo-08.png') ?>" alt="logo"/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                
                <?php 
                wp_list_pages(array(
                    'title_li' => NULL
                ));
                ?>

            </div>
        </div>
    </nav>
</header>
<div class="content">