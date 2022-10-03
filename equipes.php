<?php get_header();
//Template Name: equipe
?>

<?php 
get_template_part( './template-parts/heroup'); 
?> 

<main id="equipe">

<div class="container">
<section id="fem">
<h2>équipes féminines</h2>
<div id="smarttab" class="st-vertical">
<ul class="nav">
<li>
<a class="nav-link" href="#tab-1">
Pré-nationale
</a>
</li>
<li>
<a class="nav-link" href="#tab-2">
Départementale
</a>
</li>
<li>
<a class="nav-link" href="#tab-3">
M18 Coupe de France
</a>
</li>
<li>
<a class="nav-link" href="#tab-4">
M18
</a>
</li>
<li>
<a class="nav-link" href="#tab-5">
M15
</a>
</li>
<li>
<a class="nav-link" href="#tab-6">
M13 Mixte
</a>
</li>
</ul>

<div class="tab-content">
<?php if ( have_rows( 'equipes_feminines' ) ) : ?>
	<?php while ( have_rows( 'equipes_feminines' ) ) : the_row(); ?>
	<div id="tab-1" class="tab-pane" role="tabpanel">
	
	<?php if ( have_rows( 'pre-nationale' ) ) : ?>
		<?php while ( have_rows( 'pre-nationale' ) ) : the_row(); ?>
		<div class="phototab">
		<?php $photo_pre_nationale = get_sub_field( 'photo_pre-nationale' ); ?>
		<?php $size = 'full'; ?>
		<?php if ( $photo_pre_nationale ) : ?>
			<?php echo wp_get_attachment_image( $photo_pre_nationale, $size ); ?>
			<?php endif; ?>
			</div>
			<?php $calendrier_pre_nationale = get_sub_field( 'calendrier_pre-nationale' ); ?>
			<?php if ( $calendrier_pre_nationale ) : ?>
				<a class="liencalendrier" href="<?php echo esc_url( $calendrier_pre_nationale['url'] ); ?>" target="<?php echo esc_attr( $calendrier_pre_nationale['target'] ); ?>"><?php echo esc_html( $calendrier_pre_nationale['title'] ); ?>Calendrier et résultats</a>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
				</div>
				
				<div id="tab-2" class="tab-pane" role="tabpanel">
				<?php if ( have_rows( 'departementale' ) ) : ?>
					<?php while ( have_rows( 'departementale' ) ) : the_row(); ?>
					<div class="phototab">
					<?php $photo_departementale = get_sub_field( 'photo_departementale' ); ?>
					<?php $size = 'full'; ?>
					<?php if ( $photo_departementale ) : ?>
						<?php echo wp_get_attachment_image( $photo_departementale, $size ); ?>
						<?php endif; ?>
						</div>
						<?php $calendrier_departementale = get_sub_field( 'calendrier_departementale' ); ?>
						<?php if ( $calendrier_departementale ) : ?>
							<a class="liencalendrier" href="<?php echo esc_url( $calendrier_departementale['url'] ); ?>" target="<?php echo esc_attr( $calendrier_departementale['target'] ); ?>"><?php echo esc_html( $calendrier_departementale['title'] ); ?>Calendrier et résultats</a>
							<?php endif; ?>
							<?php endwhile; ?>
							<?php endif; ?>
							</div>
							
							<div id="tab-3" class="tab-pane" role="tabpanel">
							<?php if ( have_rows( 'm18_coupe_de_france' ) ) : ?>
								<?php while ( have_rows( 'm18_coupe_de_france' ) ) : the_row(); ?>
								<div class="phototab">
								<?php $photo_m18_coupe_de_france = get_sub_field( 'photo_m18_coupe_de_france' ); ?>
								<?php $size = 'full'; ?>
								<?php if ( $photo_m18_coupe_de_france ) : ?>
									<?php echo wp_get_attachment_image( $photo_m18_coupe_de_france, $size ); ?>
									<?php endif; ?>
									</div>
									<?php $calendrier_m18_coupe_de_france = get_sub_field( 'calendrier_m18_coupe_de_france' ); ?>
									<?php if ( $calendrier_m18_coupe_de_france ) : ?>
										<a class="liencalendrier" href="<?php echo esc_url( $calendrier_m18_coupe_de_france['url'] ); ?>" target="<?php echo esc_attr( $calendrier_m18_coupe_de_france['target'] ); ?>"><?php echo esc_html( $calendrier_m18_coupe_de_france['title'] ); ?>Calendrier et résultats</a>
										<?php endif; ?>
										<?php endwhile; ?>
										<?php endif; ?>
										</div>
										
										<div id="tab-4" class="tab-pane" role="tabpanel">
										<?php if ( have_rows( 'm18' ) ) : ?>
											<?php while ( have_rows( 'm18' ) ) : the_row(); ?>
											<div class="phototab">
											<?php $photo_m18 = get_sub_field( 'photo_m18' ); ?>
											<?php $size = 'full'; ?>
											<?php if ( $photo_m18 ) : ?>
												<?php echo wp_get_attachment_image( $photo_m18, $size ); ?>
												<?php endif; ?>
												</div>
												<?php $calendrier_m18 = get_sub_field( 'calendrier_m18' ); ?>
												<?php if ( $calendrier_m18 ) : ?>
													<a class="liencalendrier" href="<?php echo esc_url( $calendrier_m18['url'] ); ?>" target="<?php echo esc_attr( $calendrier_m18['target'] ); ?>"><?php echo esc_html( $calendrier_m18['title'] ); ?>Calendrier et résultats</a>
													<?php endif; ?>
													<?php endwhile; ?>
													<?php endif; ?>
													</div>
													
													<div id="tab-5" class="tab-pane" role="tabpanel">
													<?php if ( have_rows( 'm15' ) ) : ?>
														<?php while ( have_rows( 'm15' ) ) : the_row(); ?>
														<div class="phototab">
														<?php $photo_m15 = get_sub_field( 'photo_m15' ); ?>
														<?php $size = 'full'; ?>
														<?php if ( $photo_m15 ) : ?>
															<?php echo wp_get_attachment_image( $photo_m15, $size ); ?>
															<?php endif; ?>
															</div>
															<?php $calendrier_m15 = get_sub_field( 'calendrier_m15' ); ?>
															<?php if ( $calendrier_m15 ) : ?>
																<a class="liencalendrier" href="<?php echo esc_url( $calendrier_m15['url'] ); ?>" target="<?php echo esc_attr( $calendrier_m15['target'] ); ?>"><?php echo esc_html( $calendrier_m15['title'] ); ?>Calendrier et résultats</a>
																<?php endif; ?>
																<?php endwhile; ?>
																<?php endif; ?>
																</div>
																
																<div id="tab-6" class="tab-pane" role="tabpanel">
																<?php if ( have_rows( 'm13_mixte' ) ) : ?>
																	<?php while ( have_rows( 'm13_mixte' ) ) : the_row(); ?>
																	<div class="phototab">
																	<?php $photo_m13_mixte = get_sub_field( 'photo_m13_mixte' ); ?>
																	<?php $size = 'full'; ?>
																	<?php if ( $photo_m13_mixte ) : ?>
																		<?php echo wp_get_attachment_image( $photo_m13_mixte, $size ); ?>
																		<?php endif; ?>
																		</div>
																		<?php $calendrier_m13_mixte = get_sub_field( 'calendrier_m13_mixte' ); ?>
																		<?php if ( $calendrier_m13_mixte ) : ?>
																			<a class="liencalendrier" href="<?php echo esc_url( $calendrier_m13_mixte['url'] ); ?>" target="<?php echo esc_attr( $calendrier_m13_mixte['target'] ); ?>"><?php echo esc_html( $calendrier_m13_mixte['title'] ); ?>Calendrier et résultats</a>
																			<?php endif; ?>
																			<?php endwhile; ?>
																			<?php endif; ?>
																			</div>
																			<?php endwhile; ?>
																			<?php endif; ?>
																			</div>
																			</div>
																			</section>
																			</div>
																			
																			<hr>
																			
																			<div class="container">
																			<section id="masc">
																			<h2>équipes masculines</h2>
																			<div id="smarttab2" class="st-vertical">
																			<ul class="nav">
																			<li>
																			<a class="nav-link" href="#tab-1">
																			Pré-nationale
																			</a>
																			</li>
																			<li>
																			<a class="nav-link" href="#tab-2">
																			Départementale A
																			</a>
																			</li>
																			<li>
																			<a class="nav-link" href="#tab-3">
																			Départementale B
																			</a>
																			</li>
																			<li>
																			<a class="nav-link" href="#tab-4">
																			M18
																			</a>
																			</li>
																			<li>
																			<a class="nav-link" href="#tab-5">
																			M15
																			</a>
																			</li>
																			<li>
																			<a class="nav-link" href="#tab-6">
																			M13
																			</a>
																			</li>
																			</ul>
																			
																			<div class="tab-content">
																			<?php if ( have_rows( 'equipes_masculines' ) ) : ?>
																				<?php while ( have_rows( 'equipes_masculines' ) ) : the_row(); ?>
																				<div id="tab-1" class="tab-pane" role="tabpanel">
																				<?php if ( have_rows( 'pre-nationale' ) ) : ?>
																					<?php while ( have_rows( 'pre-nationale' ) ) : the_row(); ?>
																					<div class="phototab">
																					<?php $photo_pre_nationale = get_sub_field( 'photo_pre-nationale' ); ?>
																					<?php $size = 'full'; ?>
																					<?php if ( $photo_pre_nationale ) : ?>
																						<?php echo wp_get_attachment_image( $photo_pre_nationale, $size ); ?>
																						<?php endif; ?>
																						</div>
																						<?php $calendrier_pre_nationale = get_sub_field( 'calendrier_pre-nationale' ); ?>
																						<?php if ( $calendrier_pre_nationale ) : ?>
																							<a class="liencalendrier" href="<?php echo esc_url( $calendrier_pre_nationale['url'] ); ?>" target="<?php echo esc_attr( $calendrier_pre_nationale['target'] ); ?>"><?php echo esc_html( $calendrier_pre_nationale['title'] ); ?>Calendrier et résultats</a>
																							<?php endif; ?>
																							<?php endwhile; ?>
																							<?php endif; ?>
																							</div>
																							<div id="tab-2" class="tab-pane" role="tabpanel">
																							<?php if ( have_rows( 'departementale_a' ) ) : ?>
																								<?php while ( have_rows( 'departementale_a' ) ) : the_row(); ?>
																								<div class="phototab">
																								<?php $photo_departementale_a = get_sub_field( 'photo_departementale_a' ); ?>
																								<?php $size = 'full'; ?>
																								<?php if ( $photo_departementale_a ) : ?>
																									<?php echo wp_get_attachment_image( $photo_departementale_a, $size ); ?>
																									<?php endif; ?>
																									</div>
																									<?php $calendrier_departementale_a = get_sub_field( 'calendrier_departementale_a' ); ?>
																									<?php if ( $calendrier_departementale_a ) : ?>
																										<a class="liencalendrier" href="<?php echo esc_url( $calendrier_departementale_a['url'] ); ?>" target="<?php echo esc_attr( $calendrier_departementale_a['target'] ); ?>"><?php echo esc_html( $calendrier_departementale_a['title'] ); ?>Calendrier et résultats</a>
																										<?php endif; ?>
																										<?php endwhile; ?>
																										<?php endif; ?>
																										</div>
																										
																										<div id="tab-3" class="tab-pane" role="tabpanel">
																										<?php if ( have_rows( 'departementale_b' ) ) : ?>
																											<?php while ( have_rows( 'departementale_b' ) ) : the_row(); ?>
																											<div class="phototab">
																											<?php $photo_departementale_b = get_sub_field( 'photo_departementale_b' ); ?>
																											<?php $size = 'full'; ?>
																											<?php if ( $photo_departementale_b ) : ?>
																												<?php echo wp_get_attachment_image( $photo_departementale_b, $size ); ?>
																												<?php endif; ?>
																												</div>
																												<?php $calendrier_departementale_b = get_sub_field( 'calendrier_departementale_b' ); ?>
																												<?php if ( $calendrier_departementale_b ) : ?>
																													<a class="liencalendrier" href="<?php echo esc_url( $calendrier_departementale_b['url'] ); ?>" target="<?php echo esc_attr( $calendrier_departementale_b['target'] ); ?>"><?php echo esc_html( $calendrier_departementale_b['title'] ); ?>Calendrier et résultats</a>
																													<?php endif; ?>
																													<?php endwhile; ?>
																													<?php endif; ?>
																													</div>
																													
																													<div id="tab-4" class="tab-pane" role="tabpanel">
																													<?php if ( have_rows( 'm18' ) ) : ?>
																														<?php while ( have_rows( 'm18' ) ) : the_row(); ?>
																														<div class="phototab">
																														<?php $photo_m18 = get_sub_field( 'photo_m18' ); ?>
																														<?php $size = 'full'; ?>
																														<?php if ( $photo_m18 ) : ?>
																															<?php echo wp_get_attachment_image( $photo_m18, $size ); ?>
																															<?php endif; ?>
																															</div>
																															<?php $calendrier_m18 = get_sub_field( 'calendrier_m18' ); ?>
																															<?php if ( $calendrier_m18 ) : ?>
																																<a class="liencalendrier" href="<?php echo esc_url( $calendrier_m18['url'] ); ?>" target="<?php echo esc_attr( $calendrier_m18['target'] ); ?>"><?php echo esc_html( $calendrier_m18['title'] ); ?>Calendrier et résultats</a>
																																<?php endif; ?>
																																<?php endwhile; ?>
																																<?php endif; ?>
																																</div>
																																
																																<div id="tab-5" class="tab-pane" role="tabpanel">
																																<?php if ( have_rows( 'm15' ) ) : ?>
																																	<?php while ( have_rows( 'm15' ) ) : the_row(); ?>
																																	<div class="phototab">
																																	<?php $photo_m15 = get_sub_field( 'photo_m15' ); ?>
																																	<?php $size = 'full'; ?>
																																	<?php if ( $photo_m15 ) : ?>
																																		<?php echo wp_get_attachment_image( $photo_m15, $size ); ?>
																																		<?php endif; ?>
																																		</div>
																																		<?php $calendrier_m15 = get_sub_field( 'calendrier_m15' ); ?>
																																		<?php if ( $calendrier_m15 ) : ?>
																																			<a class="liencalendrier" href="<?php echo esc_url( $calendrier_m15['url'] ); ?>" target="<?php echo esc_attr( $calendrier_m15['target'] ); ?>"><?php echo esc_html( $calendrier_m15['title'] ); ?>Calendrier et résultats</a>
																																			<?php endif; ?>
																																			<?php endwhile; ?>
																																			<?php endif; ?>
																																			</div>
																																			
																																			<div id="tab-6" class="tab-pane" role="tabpanel">
																																			<?php if ( have_rows( 'm13' ) ) : ?>
																																				<?php while ( have_rows( 'm13' ) ) : the_row(); ?>
																																				<div class="phototab">
																																				<?php $photo_m = get_sub_field( 'photo_m13' ); ?>
																																				<?php $size = 'full'; ?>
																																				<?php if ( $photo_m13 ) : ?>
																																					<?php echo wp_get_attachment_image( $photo_m13, $size ); ?>
																																					<?php endif; ?>
																																					</div>
																																					<?php $calendrier_m13 = get_sub_field( 'calendrier_m13' ); ?>
																																					<?php if ( $calendrier_m13 ) : ?>
																																						<a class="liencalendrier" href="<?php echo esc_url( $calendrier_m13['url'] ); ?>" target="<?php echo esc_attr( $calendrier_m13['target'] ); ?>"><?php echo esc_html( $calendrier_m13['title'] ); ?>Calendrier et résultats</a>
																																						<?php endif; ?>
																																						<?php endwhile; ?>
																																						<?php endif; ?>
																																						</div>
																																						<?php endwhile; ?>
																																						<?php endif; ?>
																																						</div>
																																						</div>
																																						</section>
																																						</div>
																																						
																																						<hr>
																																						
																																						<div class="container">
																																						<section id="loisir">
																																						<h2>Autres équipes</h2>
																																						<div id="smarttab3" class="st-vertical">
																																						<ul class="nav">
																																						<li>
																																						<a class="nav-link" href="#tab-1">
																																						Ecole de volley
																																						</a>
																																						</li>
																																						<li>
																																						<a class="nav-link" href="#tab-2">
																																						Baby Volley
																																						</a>
																																						</li>
																																						<li>
																																						<a class="nav-link" href="#tab-3">
																																						Volley assis
																																						</a>
																																						</li>
																																						<li>
																																						<a class="nav-link" href="#tab-4">
																																						FIT Volley
																																						</a>
																																						</li>
																																						
																																						</ul>
																																						
																																						
																																						<div class="tab-content">
																																						<?php if ( have_rows( 'autres_equipes' ) ) : ?>
																																							<?php while ( have_rows( 'autres_equipes' ) ) : the_row(); ?>
																																							<div id="tab-1" class="tab-pane" role="tabpanel">
																																							<?php if ( have_rows( 'ecole_de_volley' ) ) : ?>
																																								<?php while ( have_rows( 'ecole_de_volley' ) ) : the_row(); ?>
																																								<div class="phototab">
																																								<?php $photo_ecole_de_volley = get_sub_field( 'photo_ecole_de_volley' ); ?>
																																								<?php $size = 'full'; ?>
																																								<?php if ( $photo_ecole_de_volley ) : ?>
																																									<?php echo wp_get_attachment_image( $photo_ecole_de_volley, $size ); ?>
																																									<?php endif; ?>
																																									</div>
																																									<?php $calendrier_ecole_de_volley = get_sub_field( 'calendrier_ecole_de_volley' ); ?>
																																									<?php if ( $calendrier_ecole_de_volley ) : ?>
																																										<a class="liencalendrier" href="<?php echo esc_url( $calendrier_ecole_de_volley['url'] ); ?>" target="<?php echo esc_attr( $calendrier_ecole_de_volley['target'] ); ?>"><?php echo esc_html( $calendrier_ecole_de_volley['title'] ); ?>Calendrier et résultats</a>
																																										<?php endif; ?>
																																										<?php endwhile; ?>
																																										<?php endif; ?>
																																										</div>
																																										
																																										<div id="tab-2" class="tab-pane" role="tabpanel">
																																										<?php if ( have_rows( 'baby_volley' ) ) : ?>
																																											<?php while ( have_rows( 'baby_volley' ) ) : the_row(); ?>
																																											<div class="phototab">
																																											<?php $photo_baby_volley = get_sub_field( 'photo_baby_volley' ); ?>
																																											<?php $size = 'full'; ?>
																																											<?php if ( $photo_baby_volley ) : ?>
																																												<?php echo wp_get_attachment_image( $photo_baby_volley, $size ); ?>
																																												<?php endif; ?>
																																												</div>
																																												<?php $calendrier_baby_volley = get_sub_field( 'calendrier_baby_volley' ); ?>
																																												<?php if ( $calendrier_baby_volley ) : ?>
																																													<a class="liencalendrier" href="<?php echo esc_url( $calendrier_baby_volley['url'] ); ?>" target="<?php echo esc_attr( $calendrier_baby_volley['target'] ); ?>"><?php echo esc_html( $calendrier_baby_volley['title'] ); ?>Calendrier et résultats</a>
																																													<?php endif; ?>
																																													<?php endwhile; ?>
																																													<?php endif; ?>
																																													</div>
																																													
																																													<div id="tab-3" class="tab-pane" role="tabpanel">
																																													<?php if ( have_rows( 'volley_assis' ) ) : ?>
																																														<?php while ( have_rows( 'volley_assis' ) ) : the_row(); ?>
																																														<div class="phototab">
																																														<?php $photo_volley_assis = get_sub_field( 'photo_volley_assis' ); ?>
																																														<?php $size = 'full'; ?>
																																														<?php if ( $photo_volley_assis ) : ?>
																																															<?php echo wp_get_attachment_image( $photo_volley_assis, $size ); ?>
																																															<?php endif; ?>
																																															</div>
																																															<?php $calendrier_volley_assis = get_sub_field( 'calendrier_volley_assis' ); ?>
																																															<?php if ( $calendrier_volley_assis ) : ?>
																																																<a class="liencalendrier" href="<?php echo esc_url( $calendrier_volley_assis['url'] ); ?>" target="<?php echo esc_attr( $calendrier_volley_assis['target'] ); ?>"><?php echo esc_html( $calendrier_volley_assis['title'] ); ?>Calendrier et résultats</a>
																																																<?php endif; ?>
																																																<?php endwhile; ?>
																																																<?php endif; ?>
																																																</div>
																																																
																																																<div id="tab-4" class="tab-pane" role="tabpanel">
																																																<?php if ( have_rows( 'fit_volley' ) ) : ?>
																																																	<?php while ( have_rows( 'fit_volley' ) ) : the_row(); ?>
																																																	<div class="phototab">
																																																	<?php $photo_fit_volley = get_sub_field( 'photo_fit_volley' ); ?>
																																																	<?php $size = 'full'; ?>
																																																	<?php if ( $photo_fit_volley ) : ?>
																																																		<?php echo wp_get_attachment_image( $photo_fit_volley, $size ); ?>
																																																		<?php endif; ?>
																																																		</div>
																																																		<?php $calendrier_fit_volley = get_sub_field( 'calendrier_fit_volley' ); ?>
																																																		<?php if ( $calendrier_fit_volley ) : ?>
																																																			<a class="liencalendrier" href="<?php echo esc_url( $calendrier_fit_volley['url'] ); ?>" target="<?php echo esc_attr( $calendrier_fit_volley['target'] ); ?>"><?php echo esc_html( $calendrier_fit_volley['title'] ); ?>Calendrier et résultats</a>
																																																			<?php endif; ?>
																																																			<?php endwhile; ?>
																																																			<?php endif; ?>
																																																			</div>
																																																			<?php endwhile; ?>
																																																			<?php endif; ?>
																																																			</div>
																																																			</div>
																																																			</section>
																																																			</div>
																																																			
																																																			<div class="container">
																																																			<section id="loisir">
																																																			<h2>Equipe Loisir</h2>
																																																			<div id="smarttab3" class="st-vertical">
																																																			<ul class="nav">
																																																			<li>
																																																			<a class="nav-link" href="#tab-1">
																																																			Equipe loisir
																																																			</a>
																																																			</li>
																																																			
																																																			</ul>
																																																			
																																																			
																																																			<div class="tab-content">
																																																			<?php if ( have_rows( 'equipe_loisir' ) ) : ?>
																																																				<?php while ( have_rows( 'equipe_loisir' ) ) : the_row(); ?>
																																																				<div id="tab-1" class="tab-pane" role="tabpanel">
																																																				<?php if ( have_rows( 'loisir' ) ) : ?>
																																																					<?php while ( have_rows( 'loisir' ) ) : the_row(); ?>
																																																					<div class="phototab">
																																																					<?php $photo_ecole_de_volley = get_sub_field( 'photo_loisir' ); ?>
																																																					<?php $size = 'full'; ?>
																																																					<?php if ( $photo_ecole_de_volley ) : ?>
																																																						<?php echo wp_get_attachment_image( $photo_ecole_de_volley, $size ); ?>
																																																						<?php endif; ?>
																																																						</div>
																																																						<?php $calendrier_ecole_de_volley = get_sub_field( 'calendrier_loisir' ); ?>
																																																						<?php if ( $calendrier_ecole_de_volley ) : ?>
																																																							<a class="liencalendrier" href="<?php echo esc_url( $calendrier_ecole_de_volley['url'] ); ?>" target="<?php echo esc_attr( $calendrier_ecole_de_volley['target'] ); ?>"><?php echo esc_html( $calendrier_ecole_de_volley['title'] ); ?>Calendrier et résultats</a>
																																																							<?php endif; ?>
																																																							<?php endwhile; ?>
																																																							<?php endif; ?>
																																																							</div>
																																																							
																																																							
																																																							
																																																							
																																																							<?php endwhile; ?>
																																																							<?php endif; ?>
																																																							</div>
																																																							</div>
																																																							</section>
																																																							</div>
																																																							
																																																							<hr>
																																																							
																																																							</main>
																																																							
																																																							
																																																							<?php get_footer(); ?>