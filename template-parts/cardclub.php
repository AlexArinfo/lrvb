<!-- card inscription -->
                        <article class="containercard">
                        <div class="card"><?php if ( have_rows( 'inscription' ) ) : ?>
                            <?php while ( have_rows( 'inscription' ) ) : the_row(); ?>
                            <img src="http://localhost:8888/lrvb/wp-content/uploads/2022/08/Inscription-au-club.png" alt="">
                            <h3><?php the_sub_field( 'titre_inscription' ); ?></h3>
                            <p><?php the_sub_field( 'texte_inscription' ); ?></p>
                            <?php $bouton_inscription = get_sub_field( 'bouton_inscription' ); ?>
                            <?php if ( $bouton_inscription ) : ?>
                                <form action="<?php echo esc_url( $bouton_inscription['url'] ); ?>" method="get" target="<?php echo esc_attr( $bouton_inscription['target'] ); ?>">
                                <button type="submit"><?php echo esc_html( $bouton_inscription['title'] ); ?></button>
                                </form>
                                <?php endif; ?>
                                <?php endwhile; ?>
                                <?php endif; ?>
                                </div>
                                </article>
                                <!-- fin card inscription -->
                                
                                <!-- card charte eco -->
                                <article class="containercard">
                                <div class="card"><?php if ( have_rows( 'charte_eco-responsable' ) ) : ?>
                                    <?php while ( have_rows( 'charte_eco-responsable' ) ) : the_row(); ?>
                                    <img src="http://localhost:8888/lrvb/wp-content/uploads/2022/08/Charte-éco-responsable.png" alt="">
                                    <h3><?php the_sub_field( 'titre_charte_eco-responsable' ); ?></h3>
                                    <p><?php the_sub_field( 'texte_charte_eco-responsable' ); ?></p><?php $bouton_charte_eco_responsable = get_sub_field( 'bouton_charte_eco-responsable' ); ?>
                                    <?php if ( $bouton_inscription ) : ?>
                                        <form action="<?php echo esc_url( $bouton_charte_eco_responsable['url'] ); ?>" method="get" target="<?php echo esc_attr( $bouton_charte_eco_responsable['target'] ); ?>">
                                        <button type="submit"><?php echo esc_html( $bouton_charte_eco_responsable['title'] ); ?></button>
                                        </form>
                                        <?php endif; ?>
                                        <?php endwhile; ?>
                                        <?php endif; ?>
                                        </div>
                                        </article>
                                        <!-- fin card charte eco -->
                                        
                                        
                                        <!-- card règlement -->
                                        <article class="containercard">
                                        <div class="card"><?php if ( have_rows( 'reglement_du_club' ) ) : ?>
                                            <?php while ( have_rows( 'reglement_du_club' ) ) : the_row(); ?>
                                            <img src="http://localhost:8888/lrvb/wp-content/uploads/2022/08/Réglement-du-club.png" alt="">
                                            <h3><?php the_sub_field( 'titre_reglement_du_club' ); ?></h3>
                                            <p><?php the_sub_field( 'texte_reglement_du_club' ); ?></p>
                                            <?php $bouton_reglement_du_club = get_sub_field( 'bouton_reglement_du_club' ); ?>
                                            <?php if ( $bouton_reglement_du_club ) : ?>
                                                <form action="<?php echo esc_url( $bouton_reglement_du_club['url'] ); ?>" method="get" target="<?php echo esc_attr( $bouton_reglement_du_club['target'] ); ?>">
                                                <button type="submit"><?php echo esc_html( $bouton_reglement_du_club['title'] ); ?></button>
                                                </form>
                                                <?php endif; ?>
                                                <?php endwhile; ?>
                                                <?php endif; ?>
                                                </div>
                                                </article>
                                                <!-- fin card règlement -->
                                                
                                                <!-- card membre -->
                                                <article class="containercard">
                                                <div class="card"><?php if ( have_rows( 'Membres du Comité' ) ) : ?>
                                                    <?php while ( have_rows( 'Membres du Comité' ) ) : the_row(); ?>
                                                    <img src="http://localhost:8888/lrvb/wp-content/uploads/2022/08/Membres-du-Comité.png"/>
                                                    <h3><?php the_sub_field( 'titre_membres_du_comite' ); ?></h3>
                                                    <p><?php the_sub_field( 'texte_membres_du_comite' ); ?></p>
                                                    <?php $bouton_membres_du_comite = get_sub_field( 'bouton_membres_du_comite' ); ?>
                                                    <?php if ( $bouton_membres_du_comite ) : ?>
                                                        <form action="<?php echo esc_url( $bouton_membres_du_comite['url'] ); ?>" method="get" target="<?php echo esc_attr( $bouton_membres_du_comite['target'] ); ?>">
                                                        <button type="submit"><?php echo esc_html( $bouton_membres_du_comite['title'] ); ?></button>
                                                        </form>
                                                        <?php endif; ?>
                                                        <?php endwhile; ?>
                                                        <?php endif; ?>
                                                        </div>
                                                        </article>
                                                        <!-- fin card membre -->