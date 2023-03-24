<section class="py-5">
    <div class="container">
        <div class="home-banner p-3 p-sm-3 p-md-4 p-lg-5" style="background: url(<?php the_sub_field( 'background_image' ); ?>) no-repeat center center; background-size: contain;">
            <div class="row d-flex align-items-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                    <h1 class="display-5">
                        <?php the_sub_field( 'title' ); ?>
                    </h1>
                    <p>
                        <?php the_sub_field( 'content' ); ?>
                    </p>
                    <h2>
                        <?php the_sub_field( 'sub_title' ); ?>
                    </h2>
                    <div class="row d-flex align-items-center">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                            <?php $apple_image = get_sub_field( 'apple_image' ); ?>
                            <?php $size = 'full'; ?>
                            <?php if ( $apple_image ) : ?>
                                <?php echo wp_get_attachment_image( $apple_image, $size ); ?>
                            <?php endif; ?>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                            <?php $android = get_sub_field( 'android' ); ?>
                            <?php $size = 'full'; ?>
                            <?php if ( $android ) : ?>
                                <?php echo wp_get_attachment_image( $android, $size ); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-12 col-lg-4 text-center">
                    <?php $mobile_image = get_sub_field( 'mobile_image' ); ?>
                    <?php $size = 'full'; ?>
                    <?php if ( $mobile_image ) : ?>
                        <?php echo wp_get_attachment_image( $mobile_image, $size, false, array( 'class' => 'iphone' ) ); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>