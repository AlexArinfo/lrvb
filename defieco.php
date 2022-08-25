<?php get_header();
//Template Name: defieco
?>

<?php 
get_template_part( './template-parts/heroup'); 
?> 

<main id="defieco">
<div class="container">
<?php if ( have_rows( 'nos_engagements' ) ) : ?>
    <?php while ( have_rows( 'nos_engagements' ) ) : the_row(); ?>
    <article>
    <?php if ( have_rows( 'engagement' ) ) : ?>
        <?php while ( have_rows( 'engagement' ) ) : the_row(); ?>
        <?php $logo_engagement = get_sub_field( 'logo_engagement' ); ?>
        <?php $size = 'full'; ?>
        <?php if ( $logo_engagement ) : ?>
            <?php echo wp_get_attachment_image( $logo_engagement, $size ); ?>
            <?php endif; ?>
            <h3> <?php the_sub_field( 'titre_de_lengagement' ); ?></h3>
            <p>  <?php the_sub_field( 'texte_engagement' ); ?></p>
            <?php endwhile; ?>
            <?php endif; ?>
            </article>
            <?php endwhile; ?>
            <?php else : ?>
                <?php // no rows found ?>
                <?php endif; ?>
                </div>
                </main>
                
                <?php get_footer(); ?>