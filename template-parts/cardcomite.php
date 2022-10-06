<?php if ( have_rows( 'cartes_comite' ) ) : ?>
    <?php while ( have_rows( 'cartes_comite' ) ) : the_row(); ?>
    <div class="card">
    <?php if ( have_rows( 'carte_comite' ) ) : ?>
        <?php while ( have_rows( 'carte_comite' ) ) : the_row(); ?>
        <div class="imgBx"><?php $photo = get_sub_field( 'photo' ); ?>
        <?php $size = 'medium'; ?>
        <?php if ( $photo ) : ?>
            <?php echo wp_get_attachment_image( $photo, $size ); ?>
            <?php endif; ?>
            </div>
            <div class="details">
            <h3><?php the_sub_field( 'nom' ); ?><br>
            <span>            <?php the_sub_field( 'fonction' ); ?>
            </span>
            </h3>
            </div>
            
            
            <?php endwhile; ?>
            <?php endif; ?>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>