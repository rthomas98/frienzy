<section class="py-5 black-banner">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                <?php $mobile_image = get_sub_field( 'mobile_image' ); ?>
                <?php $size = 'full'; ?>
                <?php if ( $mobile_image ) : ?>
                    <?php echo wp_get_attachment_image( $mobile_image, $size ); ?>
                <?php endif; ?>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                <p class="lead">
                    <?php the_sub_field( 'sub_title' ); ?>
                </p>
                <h2 class="display-5">
                    <?php the_sub_field( 'title' ); ?>
                </h2>
                <p>
                    <?php the_sub_field( 'content' ); ?>
                </p>

                <p>
                    <a class="btn btn-lg btn-primary" href="#contact">
                        <?php the_sub_field( 'button_label' ); ?>
                    </a>
                </p>
            </div>
        </div>
    </div>
</section>