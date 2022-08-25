<div id="slideshow">
    
   <?php if ( have_rows( 'galerieslider' ) ) : ?>
    <?php while ( have_rows( 'galerieslider' ) ) : the_row(); ?>
    <div>
		<?php $image = get_sub_field( 'image' ); ?>
		<?php $size = 'couv'; ?>
		<?php if ( $image ) : ?>
            <?php echo wp_get_attachment_image( $image, $size ); ?>
            
        <?php endif; ?>
        </div>
	<?php endwhile; ?>
<?php else : ?>
	
<?php endif; ?>

   
</div>