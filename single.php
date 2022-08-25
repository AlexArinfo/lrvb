<?php get_header();

?>


<section class="heroupsingle">
<div class="hero" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');">

</div>
<div id="infosarticle">
<span class="date">
<span id="dm">
<span id="time"><?php the_time('d '); ?></span> 
<span id="month"><?php the_time('M '); ?></span> 
<span id="year"><?php the_time('Y '); ?></span>
</span>
</span>

<span id="infoarticlebis">
<h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
<div class="allinfos">
<span class="aut"><?php the_author();?></span>
<span class="cat"><?php the_category(); ?></span>
</div>
</span>
</div>
</section>

<main id="single">
<div class="container">
<div id="medcont">



<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <article>
    <?php the_content(); ?>
    
    
    <?php endwhile; ?>
    <?php endif; ?>
    </article>
    </div>
    <div id="sidecont">
    <?php 
get_template_part( './template-parts/recentpost'); 
?>

    </div>
    </div>
    
    </main>
    <?php get_footer(); ?>