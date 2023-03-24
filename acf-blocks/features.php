<section class="features py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col text-center">
                <h2 class="display-5">
                    <?php the_sub_field( 'title' ); ?>
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                <h3 class="mb-3">
                    <?php the_sub_field( 'for_attendees_title' ); ?>
                </h3>

                <?php if ( have_rows( 'attendees_details' ) ) : ?>
                    <?php while ( have_rows( 'attendees_details' ) ) : the_row(); ?>
                    <div class="detail mb-3">
                        <h4>
                            <?php the_sub_field( 'header' ); ?>
                        </h4>
                        <p>
                            <?php the_sub_field( 'content' ); ?>
                        </p>
                    </div>
                    <?php endwhile; ?>
                <?php else : ?>
                    <?php // No rows found ?>
                <?php endif; ?>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                <h3 class="mb-3">
                    <?php the_sub_field( 'for_attendees_title' ); ?>
                </h3>

                <?php if ( have_rows( 'event_operators_details' ) ) : ?>
                    <?php while ( have_rows( 'event_operators_details' ) ) : the_row(); ?>
                <div class="detail mb-3">
                        <h4>
                            <?php the_sub_field( 'header' ); ?>
                        </h4>
                        <p>
                            <?php the_sub_field( 'content' ); ?>
                        </p>
                </div>
                    <?php endwhile; ?>
                <?php else : ?>
                    <?php // No rows found ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>