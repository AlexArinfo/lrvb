<?php get_header();
//Template Name: inscription
?>

<?php 
get_template_part( './template-parts/heroup'); 
?>

<main id="inscription">


<div id="blocinscriptions">

<div id="rightinscription">
<h2>Inscriptions de la saison 2021/2022, voici les documents utiles</h2>
<?php if ( have_rows( 'subscribe' ) ) : ?>
	<?php while ( have_rows( 'subscribe' ) ) : the_row(); ?>
	<p><?php the_sub_field( 'texte_inscription' ); ?></p>	
		<?php $lien_inscription = get_sub_field( 'lien_inscription' ); ?>
		<?php if ( $lien_inscription ) : ?>
            <form action="<?php echo esc_url( $lien_inscription['url'] ); ?>" method="get" target="<?php echo esc_attr( $lien_inscription['target'] ); ?>">
                    <button type="submit"><?php echo esc_html( $lien_inscription['title'] ); ?>dossier d'inscription</button>
                    </form>
		<?php endif; ?>
	<?php endwhile; ?>
<?php endif; ?>
</div>
</div>
</main>

<?php get_footer(); ?>