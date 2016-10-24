<!DOCTYPE html>

<html <?php language_attributes(); ?>>

  <head>

    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <meta name="viewport" content="width=device-width" />

    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />

    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?>>
    <div class="content-wrapper">
      <header>
        <nav>
          <ul class="left-hand-links">
            <li><a href="./brands" class="navlink">Brands</a></li>
            <li><a href="./retailers" class="navlink">Retailers</a></li>
          </ul>
          <div class="master-lo"></div>
          <ul class="right-hand-links">
            <li class="sm-links"><a href="https://pim.itemmaster.com/" class="sm-navlink">Log In</a></li>
            <li class="sm-links"><a href="https://pim.itemmaster.com/" class="sm-navlink">Register</a></li>
            <li class="sm-links"><a href="https://pim.itemmaster.com/" class="navlink partner-link">Partner With Us</a></li>
            <li class="hamburger">
              <div class="hamburger-menu">
                <div class="bar"></div>
              </div>
            </li>
          </ul>
        </nav>
        <div class='dropin hide-big'>
          <ul>
            <li><a href="./brands" class="navlink dropin-link active">Brands</a></li>
            <li><a href="./retailers" class="navlink dropin-link">Retailers</a></li>
            <li class="sm-links"><a href="" class="navlink dropin-link">Log In</a></li>
            <li class="sm-links"><a href="" class="navlink dropin-link">Register</a></li>
          </ul>
        </div>
      </header>
      <main class="container">
