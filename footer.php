<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<footer>
    <div class="container">
    <div id="logfoo" class="colfoo">
        <?php if(has_custom_logo()) : ?>
  <?php the_custom_logo(); ?>
  <?php else : ?>
    <?php endif; ?></div>
        <div id="rctart" class="colfoo">
            <h3>actualités</h3>
            <ul>
          <?php
          $recentPosts = new WP_Query();
          $recentPosts->query('showposts=4');
          ?>
          <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
            <li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>
          <?php endwhile; ?>
        </ul>
        </div>
        <div id="avnr" class="colfoo">
        <h3>a venir</h3>
        </div>
        <div id="part" class="colfoo">
        <h3>nos partenaires</h3>
        <ul>
            <li><a href="https://www.bailly-immo.com/">Bailly Immobilier</a></li>
            <li><a href="https://www.creditmutuel.fr/cmo/fr/groupe/banque-solide.html">Crédit Mutuel Océan</a></li>
            <li><a href="https://www.duret-promoteur.fr/">Groupe Duret</a></li>
            <li><a href="">Voir les autres partenaires</a></li>
        </ul>
        </div>
        <div id="cnt" class="colfoo">
        <h3>contact</h3>
        <h4>Salle Pierre Mendes France</h4>
        <p>Rue Léandre Merlet</p>
        <p>85000 La Roche-sur-Yon</p>
        <div id="rs">
        <?php if (have_rows('reseaux_sociaux', 'option')) : ?>
            <ul>
              <?php while (have_rows('reseaux_sociaux', 'option')) : the_row(); ?>
             
                <?php if (have_rows('reseau_social')) : ?>
                  <?php while (have_rows('reseau_social')) : the_row(); ?>
                    <?php $ajouter_un_lien = get_sub_field('ajouter_un_lien'); ?>
                    <?php if ($ajouter_un_lien) : ?> <li><a href="<?php echo esc_url($ajouter_un_lien['url']); ?>" target="<?php echo esc_attr($ajouter_un_lien['target']); ?>"><?php $ajouter_une_icone = get_sub_field('ajouter_une_icone'); ?>
                        <?php $size = 'full'; ?>
                        <?php if ($ajouter_une_icone) : ?>
                          <?php echo wp_get_attachment_image($ajouter_une_icone, $size); ?>
                        <?php endif; ?></a></li>
                    <?php endif; ?>
                  <?php endwhile; ?>
                <?php endif; ?>
              
              <?php endwhile; ?>
              </ul>
            <?php else : ?>
            <?php endif; ?>
        </div>
        </div>
    </div>
    <div id="underfooter">
        <div class="container">
        <a href="<?php echo get_permalink(21) ; ?>">Mentions Légales</a>
        <a href="<?php echo get_permalink(3) ; ?>">Politique de Confidentialité</a>
        </div>
    </div>
</footer>
</body>