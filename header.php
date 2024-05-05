<?php

/**
 * Header template
 * 
 * @package pegasus
 * 
 */


?>

<!DOCTYPE html>
<html lang="<?php language_attributes() ?>">
<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <?php 
        // Ensure backward compatibilty    
        if (function_exists( 'wp_body_open' )) {
            wp_body_open();
        };
    ?>

    <header>Header</header>
