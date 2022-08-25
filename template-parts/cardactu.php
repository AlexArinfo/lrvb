<article>
<div class="imgarticle">
<?php if (has_post_thumbnail()) : ?>
    <?php the_post_thumbnail('blogpage_thumb'); ?>
    <?php endif; ?>

    </div>
    
    <div class="textearticle">
    <span class="date">
    <?php the_time('jS F, Y'); ?>
    </span>
    <h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
    <?php the_excerpt(); ?>
    <hr>
    <div class="allinfos">
    <span class="aut"><?php the_author();?></span>
    <span class="cat"><?php the_category(); ?></span>
    </div>
    </div>
    </article>