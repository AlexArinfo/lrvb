<?php get_header();
//Template Name: Club
?>

<?php 
get_template_part( './template-parts/heroup'); 
?>

<main id="club">
<!-- section adhésion -->
<section id="adhesion">
<div class="container">

<div id="adhe">

<article>
<h2>Adhésion HelloAsso LRVB</h2>
<?php if ( have_rows( 'section_adhesion' ) ) : ?>
    <?php while ( have_rows( 'section_adhesion' ) ) : the_row(); ?>
    <?php if ( have_rows( 'nouveau_licencie' ) ) : ?>
        <?php while ( have_rows( 'nouveau_licencie' ) ) : the_row(); ?>
        <div id="new">
        <p><?php the_sub_field( 'texte_nouveau_licencie' ); ?></p>
        <?php $lien_nouveau_licencie = get_sub_field( 'lien_nouveau_licencie' ); ?>
        <?php if ( $lien_nouveau_licencie ) : ?>
            <a href="<?php echo esc_url( $lien_nouveau_licencie['url'] ); ?>" target="<?php echo esc_attr( $lien_nouveau_licencie['target'] ); ?>"><?php echo esc_html( $lien_nouveau_licencie['title'] ); ?></a>
            <?php endif; ?>
            <?php endwhile; ?>
            <?php endif; ?>
            </div>
            <?php if ( have_rows( 'deja_licencie' ) ) : ?>
                <?php while ( have_rows( 'deja_licencie' ) ) : the_row(); ?>
                <div id="old">
                <p>	<?php the_sub_field( 'texte_deja_licencie' ); ?></p>
                <?php $lien_deja_licencie = get_sub_field( 'lien_deja_licencie' ); ?>
                <?php if ( $lien_deja_licencie ) : ?>
                    <form action="<?php echo esc_url( $lien_deja_licencie['url'] ); ?>" method="get" target="<?php echo esc_attr( $lien_deja_licencie['target'] ); ?>">
                    <button type="submit"><?php echo esc_html( $lien_deja_licencie['title'] ); ?></button>
                    </form>
                    
                    <?php endif; ?>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    
                    </article>
                    
                    </div>
                   
                    </div>
                    </div>
                    </section>
                    
                    <!-- section infos pratiques -->
                    <section id="infospratiques">
                    <div class="container">
                    <h2>Informations Pratiques</h2>
                    <div class="cardsinfos">
                    <?php if ( have_rows( 'section_informations_pratiques' ) ) : ?>
                        <?php while ( have_rows( 'section_informations_pratiques' ) ) : the_row(); ?>
                        
                        <?php 
                        get_template_part( './template-parts/cardclub'); 
                        ?>
                        
                        </div>
                        <?php endwhile; ?>
                        <?php endif; ?>   
                        
                        
                        </section>
                        
                        <!-- section crénaux et calendrier -->
                        
                        <section id="crecal">
                        <?php if ( have_rows( 'section_creneaux_et_calendrier' ) ) : ?>
	<?php while ( have_rows( 'section_creneaux_et_calendrier' ) ) : the_row(); ?>
    <div class="crenaux">
		<?php if ( have_rows( 'creneaux_d’entrainement' ) ) : ?>
            <div class="contcrenaux">
			<?php while ( have_rows( 'creneaux_d’entrainement' ) ) : the_row(); ?>
            <h2>Crenaux d'entrainement</h2>
			<p><?php the_sub_field( 'texte_creneaux_d’entrainement' ); ?></p>	
				<?php $lien_creneaux_d_entrainement = get_sub_field( 'lien_creneaux_d’entrainement' ); ?>
				<?php if ( $lien_creneaux_d_entrainement ) : ?>
                    <form action="<?php echo esc_url( $lien_creneaux_d_entrainement['url'] ); ?>" method="get" target="<?php echo esc_attr( $lien_creneaux_d_entrainement['target'] ); ?>">
                    <button type="submit"><?php echo esc_html( $lien_creneaux_d_entrainement['title'] ); ?></button>
                    </form>
				<?php endif; ?>
			<?php endwhile; ?>
            </div>
		<?php endif; ?>
        </div>

        <div class="calendrier">
		<?php if ( have_rows( 'calendrier' ) ) : ?>
            <div class="contcalendrier">
			<?php while ( have_rows( 'calendrier' ) ) : the_row(); ?>
            <h2>Calendrier</h2>
			<p><?php the_sub_field( 'texte_calendrier' ); ?></p>	
				<?php $lien_calendier = get_sub_field( 'lien_calendier' ); ?>
				<?php if ( $lien_calendier ) : ?>
                    <form action="<?php echo esc_url( $lien_calendier['url'] ); ?>" method="get" target="<?php echo esc_attr( $lien_calendier['target'] ); ?>">
                    <button type="submit"><?php echo esc_html( $lien_calendier['title'] ); ?></button>
                    </form>
				<?php endif; ?>
			<?php endwhile; ?>
            </div>
		<?php endif; ?>
        </div>
	<?php endwhile; ?>
<?php endif; ?>
                </section>
                        <!-- section galerie photo -->
                        <section id="galerie">
                        
                        </section>
                        
                        <!-- section partenaire -->
                        <section id="partenaire">
                        <?php $carrousel_partenaire_images = get_field( 'carrousel_partenaire' ); ?>
<?php if ( $carrousel_partenaire_images ) :  ?>
	<?php foreach ( $carrousel_partenaire_images as $carrousel_partenaire_image ): ?>
		<a href="<?php echo esc_url( $carrousel_partenaire_image['url'] ); ?>">
			<img src="<?php echo esc_url( $carrousel_partenaire_image['sizes']['thumbnail'] ); ?>" alt="<?php echo esc_attr( $carrousel_partenaire_image['alt'] ); ?>" />
		</a>
		<p><?php echo esc_html( $carrousel_partenaire_image['caption'] ); ?></p>
	<?php endforeach; ?>
<?php endif; ?>
                        </section>
                        <?php get_footer(); ?>