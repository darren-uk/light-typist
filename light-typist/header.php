<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">

    
    
    <title>Darren Colson | Blog</title>

    <?php wp_head();?>
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond|Quicksand&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f5aecb5236.js"></script>
    
</head>
<body>

    
<div class="container">
        <div id="today">
            <span id="day"></span> / <span id="month"></span> <span id="date"></span> / <span id="year"></span>

        </div>

        <div class="location">
            Royston, Hertfordshire, England, UK
            <!-- Email Envelope -->
            <span>  &#9993;</span> 
            <!--  -->
        </div>
        <div class="top-info"> <!-- EE-MMAAIILL -->
        <a href="mailto:darre&#110;&#99;o&#108;son.%75k%40&#109;&#97;%69%6c%2eco%6d?subject=Website%20message">
        &#x64;&#x61;&#x72;&#x72;&#x65;&#x6E;&#x63;&#x6F;&#x6C;&#x73;&#x6F;&#x6E;&#x2E;&#x75;&#x6B;&#x40;&#x6D;&#x61;&#x69;&#x6C;&#x2E;&#x63;&#x6F;&#x6D;</a>
        </div>
        
        <h1 class="main-title"><a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a>
        <div class="menu-arrow"> A blog by Darren Colson </div> 
    </h1>

    
<hr>
<nav class="navigation-menu">
    <?php $args=['theme_location'=>'primary'] ?>
    <?php wp_nav_menu($args) ?>
</nav>
        <!-- <nav>
            <ul>
                <li>Home</li>
                <li>About me</li>
                <li>Work with me</li>
                <li>Coding Playground</li>
                <li>Let's talk</li>
            </ul>
        </nav> -->

        <hr>