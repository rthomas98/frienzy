<section class="pink-banner py-5 mb-4" style="background: url(<?php the_sub_field( 'background_image' ); ?>) no-repeat center center; background-size: cover;">
    <div class="container">
        <div class="col text-center">
            <p class="lead"></p>
            <h2 class="display-5">
                <?php the_sub_field( 'title' ); ?>
            </h2>
            <p>
                <?php the_sub_field( 'content' ); ?>
            </p>

            <?php $image = get_sub_field( 'image' ); ?>
            <?php $size = 'full'; ?>
            <?php if ( $image ) : ?>
                <?php echo wp_get_attachment_image( $image, $size ); ?>
            <?php endif; ?>
        </div>
    </div>
</section>