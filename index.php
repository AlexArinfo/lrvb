<?php get_header();
//Template Name: Index
?>

<?php
// Contrôler si ACF est actif
if (!function_exists('get_field')) return;
?>

<main id="index">

<section id="slideshow"></section>

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
  <a href="https://apps.apple.com/fr/app/zelive/id1578515024"><img src="https://testarinfo.fr/lrvb/wp-content/uploads/2022/09/icone-app-store.png" alt=""></a>
  <a href="https://play.google.com/store/apps/details?id=tv.zelive.app"><img src="https://testarinfo.fr/lrvb/wp-content/uploads/2022/09/icone-play-store.png" alt=""></a>
  </div>
  </section>
  
  
  
  
  <section id="partenaires">
  <h2>Nos partenaires</h2>
  <div class="customer-logos slider">
  <div class="slide"><img src="https://testarinfo.fr/lrvb/wp-content/uploads/2022/09/logo-tissu-du-renard.jpeg">
  </div>
  
  <div class="slide"><img src="https://testarinfo.fr/lrvb/wp-content/uploads/2022/09/logo-rev-evas-yon.jpeg">
  </div>
  
  <div class="slide"><img src="https://testarinfo.fr/lrvb/wp-content/uploads/2022/09/logo-2021-lrsy-ville.jpeg">
  </div>
  
  <div class="slide"><img src="https://testarinfo.fr/lrvb/wp-content/uploads/2022/09/le-grand-caf.png">
  </div>
  
  <div class="slide"><img src="https://testarinfo.fr/lrvb/wp-content/uploads/2022/09/img-5027.jpeg">
  </div>
  
  <div class="slide"><img src="https://testarinfo.fr/lrvb/wp-content/uploads/2022/09/crescendo.jpeg">
  </div>
  
  <div class="slide"><img src="https://testarinfo.fr/lrvb/wp-content/uploads/2022/09/cmo.jpeg">
  </div>
  
  <div class="slide"><img src="https://testarinfo.fr/lrvb/wp-content/uploads/2022/09/bailly.jpeg">
  </div>
  </div>
  </section>
  
  </main>
  
  <div class="go-top">
  <img src="https://testarinfo.fr/lrvb/wp-content/uploads/2022/04/Volleyball.png" alt="">
  <p>Smash!</p>
  </div>
  
  <script>
  easy_background("#slideshow",
  
  {
    slide: ["https://larochevb.fr/wp-content/uploads/2022/08/Home3-1.png",
     "https://larochevb.fr/wp-content/uploads/2022/08/Home2-1.png",
      "https://larochevb.fr/wp-content/uploads/2022/08/Home5-1.png", 
      "https://larochevb.fr/wp-content/uploads/2022/08/Home6-1.png"],
    
    delay: [2000, 2000, 2000, 2000]
  }
  
  
);
</script>
<?php get_footer(); ?> 