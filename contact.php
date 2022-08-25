<?php get_header();
//Template Name: contact
?>

<?php 
get_template_part( './template-parts/heroup'); 
?>

<main id="contact">
<div id="contactform">
<?php echo do_shortcode('[contact-form-7 id="29" title="Formulaire de contact 1"]'); ?>
</div>

<div id="adresse">
<?php if ( have_rows( 'adresse' ) ) : ?>
    <?php while ( have_rows( 'adresse' ) ) : the_row(); ?>
    <h2><?php the_sub_field( 'nom_du_club' ); ?></h2>
    <p>	<?php the_sub_field( 'adresse_du_club' ); ?></p>
    <p><?php the_sub_field( 'e-mail_du_club' ); ?></p>
    <p><?php the_sub_field( 'telephone_du_club' ); ?></p>
    <?php endwhile; ?>
    <?php endif; ?>
    </div>
    </main>
    <section id="map">
    <h2>Plan d'accès</h2>
    <iframe src="https://share.here.com/p/s-YmI9LTEuNDUwMjUwMDI5NTYzOTAzOCUyQzQ2LjY2ODU0MDk1NDU4OTg0NCUyQy0xLjQ0NjA1OTk0MjI0NTQ4MzQlMkM0Ni42NjkzMTE1MjM0Mzc1O2M9c3RyZWV0LXNxdWFyZTtsYXQ9NDYuNjY4OTM7bG9uPS0xLjQ0ODE1O249UnVlK0wlQzMlQTlhbmRyZStNZXJsZXQ7ej0xODtoPTczMDQxNg" width="100%" height="600px" style="border:none;"></iframe>
        </section>
        <?php get_footer(); ?>