<?php get_header();
//Template Name: galerie
?>

<?php 
get_template_part( './template-parts/heroup'); 
?> 


<main id="galerie">
    <div class="container">

<?php $gallery_ids = get_field( 'gallery' ); ?>
<?php $size = 'gallery-thumb'; ?>
<?php if ( $gallery_ids ) :  ?>
    <ul class="acf-gallery">
	<?php foreach ( $gallery_ids as $gallery_id ): ?>
        <li>
        <a href="<?php echo wp_get_attachment_url( $gallery_id ); ?>">
          			<?php echo wp_get_attachment_image( $gallery_id, $size ); ?>
                </a>
        </li>
        <div class="lightbox"></div>
	<?php endforeach; ?>
   </ul>
 
<?php endif; ?>
</div>

</main>

<?php get_footer(); ?>