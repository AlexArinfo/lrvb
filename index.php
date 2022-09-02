<?php get_header();
//Template Name: Index
?>

<?php
// Contrôler si ACF est actif
if (!function_exists('get_field')) return;
?>

<main id="index">
<div id="slideshow">

<?php if ( have_rows( 'galerieslider' ) ) : ?>
    <?php while ( have_rows( 'galerieslider' ) ) : the_row(); ?>
    <div>
    <?php $image = get_sub_field( 'image' ); ?>
    <?php $size = 'slideshow'; ?>
    <?php if ( $image ) : ?>
        <?php echo wp_get_attachment_image( $image, $size ); ?> 
        <?php endif; ?>
        </div>
        <?php endwhile; ?>
        <?php else : ?>
            
            <?php endif; ?>
            </div>
            
            <section class="container">
            <div id="left">
            <h2>Bienvenue au Club de Volley de la Roche sur yon</h2>
            <p><?php the_field( 'bienvenue' ); ?></p>
            </div>
            <div id="right"></div>
            </section>
            
            <section id="compteur">
            <div class="containerbis">
            <h2>Le Club en quelques chiffres</h2>
            <?php if ( have_rows( 'les_compteurs' ) ) : ?>
                <div id="groupecompteur">
                <?php while ( have_rows( 'les_compteurs' ) ) : the_row(); ?>
                
                <?php if ( have_rows( 'groupe_compteur' ) ) : ?>
                    <?php while ( have_rows( 'groupe_compteur' ) ) : the_row(); ?>
                    <article class="nomit">
                    <p class="count"><?php the_sub_field( 'nombre' ); ?></p> 
                    <p class="item"><?php the_sub_field( 'item' ); ?></p> 
                    </article>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    
                    <?php endwhile; ?>
                    </div>
                    <?php endif; ?>
                    </div>
                    </section>
                    
                    
                    <section id="actus">
                    <div class="container">
                    <h2>Actualités</h2>
                    <div id="allarticles">
                    <?php
                    $recentPosts = new WP_Query();
                    $recentPosts->query('showposts=3');
                    ?>
                    <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
                    <?php 
                    get_template_part( './template-parts/cardactu'); 
                    ?>
                    <?php
endwhile;
wp_reset_postdata();
?>
                    </div>
                    <form action="<?php echo get_permalink(13) ; ?>">
    <button type="submit" formtarget="_blank">Voir plus
</form>
                    </div>
                    </section>

                    <section id="zelive">
                        <div class="container">
                        <h2>ZeLive</h2>
                        <?php the_field( 'zelive' ); ?>
<div id="linkzelive">
  <a href="https://apps.apple.com/fr/app/zelive/id1578515024"><img src="http://localhost:8888/lrvb/wp-content/uploads/2022/09/icone-app-store.png" alt=""></a>
  <img src="http://localhost:8888/lrvb/wp-content/uploads/2022/09/icone-play-store.png" alt=""><a href=""></a>
</div>

                        </div>
                    </section>

                  
                   
                    <section id="partenaires">
                    <div class="container">
                            <h2>Nos partenaires</h2>
                            <div class="autoplay slick">
                            <div class="slide">
    <img src="https://dummyimage.com/300/000000/fff&text=1" alt="" class="img-responsive" />
    <h1>slide 1</h1>
  </div>
  <div class="slide">
    <img src="https://dummyimage.com/300/000000/fff&text=2" alt="" class="img-responsive" />
    <h1>slide 2</h1>
  </div>
  <div class="slide">
    <img src="https://dummyimage.com/300/000000/fff&text=3" alt="" class="img-responsive" />
    <h1>slide 3</h1>
  </div>
  <div class="slide">
    <img src="https://dummyimage.com/300/000000/fff&text=4" alt="" class="img-responsive" />
    <h1>slide 4</h1>
  </div>
  <div class="slide">
    <img src="https://dummyimage.com/300/000000/fff&text=5" alt="" class="img-responsive" />
    <h1>slide 5</h1>
  </div>
  </div>
                            </div>
                    </section>
                   

                    </main>
                    
                    <?php get_footer(); ?>