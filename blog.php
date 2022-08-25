<?php get_header();
//Template Name: Blog
?>

<?php 
get_template_part( './template-parts/heroup'); 
?>

<main id="blog">


<div class="container">
<h2><?php the_title()?></h2>
<section id="allarticles">
<?php
$recentPosts = new WP_Query();
$recentPosts->query('showposts=8');
?>
<?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
<?php 
get_template_part( './template-parts/cardactu'); 
?>
    <?php endwhile; ?>
    </section>
    </div>
    </main>
    <?php get_footer(); ?>
    
    
    
    
    
