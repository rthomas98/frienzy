<section id="contact" class="contact py-5">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                <h2>
                    <?php the_sub_field( 'title' ); ?>
                </h2>
                <p>
                    <?php the_sub_field( 'content' ); ?>
                </p>

                <p>
                    <strong>Phone Number:</strong> <a href="tel:2143001455"><?php the_sub_field( 'phone_number' ); ?></a>
                </p>

                <p>
                    <strong>Email Address:</strong> <a href="mailto:info@frienzy.io"><?php the_sub_field( 'email_address' ); ?></a>
                </p>

                <?php if ( have_rows( 'social_links' ) ) : ?>
                <ul class="nav">
                    <?php while ( have_rows( 'social_links' ) ) : the_row(); ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php the_sub_field( 'link' ); ?>">
                                <?php the_sub_field( 'icon' ); ?>
                            </a>
                        </li>
                    <?php endwhile; ?>
                </ul>
                <?php else : ?>
                    <?php // No rows found ?>
                <?php endif; ?>

            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                <?php the_sub_field( 'contact_form' ); ?>
            </div>
        </div>
    </div>
</section>