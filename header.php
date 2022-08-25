<!DOCTYPE html>
<html lang="fr">
<head <?php language_attributes(); ?>>
<!--    <meta charset="<?php bloginfo('charset'); ?>">-->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php the_title(); ?> </title>
<?php wp_head(); ?>
</head>

<body>

<?php 
get_template_part( './template-parts/progressbar'); 
?>
<div id="matches"><p><span>Match à venir :</span> <?php the_field( 'match_a_venir', 'option' ); ?></p></div>

<header role="banner">
<div class="tog-menu">
<a href="" class="toggle-menu"><span></span></a>
</div>

<div id="contheader">

<?php if(has_custom_logo()) : ?>
  <?php the_custom_logo(); ?>
  <?php else : ?>
    <?php endif; ?>
    
    <?php
    wp_nav_menu(array(
      'menu' => 'Menu principal',
      'link_before' => '<span>',
      'link_after' => '</span>',
      'container' => 'nav',
      'menu_class' => 'headernav'
    ));
    ?>
    
    
    </div>
    
    </header>