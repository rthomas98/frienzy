<section class="map-section py-5" style="background: url(<?php the_sub_field( 'background_image' ); ?>) no-repeat center center; background-size: contain;">
    <div class="container">
        <div class="row text-center">
            <p class="lead">
                <?php the_sub_field( 'sub_title' ); ?>
            </p>
            <h2 class="display-5 mb-4">
                <?php the_sub_field( 'title' ); ?>
            </h2>

            <?php $image = get_sub_field( 'image' ); ?>
            <?php if ( $image ) : ?>
                <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
            <?php endif; ?>
        </div>
    </div>
</section>