<section id="subscribe" class="subscribe py-5 mb-4">
    <div class="container">
        <div class="row">
            <div class="col">

            </div>
            <h2 class="display-5"><?php the_sub_field( 'title' ); ?></h2>

            <p>
                <?php the_sub_field( 'content' ); ?>
            </p>

        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-4"></div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                <?php the_sub_field( 'form' ); ?>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4"></div>
        </div>

    </div>
</section>