    <!-- TITLE-->
    <div class="title">
        <div class="container">
            <div class="title__inner">
                <h1><?php echo get_field("main_title", get_the_ID() ); ?></h1>
            </div>
        </div>
    </div>
    <!-- TITLE END-->
    <!--CHAIN-->
    <div class="chain">
        <div class="container">
            <div class="chain__inner">
                <?php the_breadcrumb(); ?>
            </div>
        </div>
    </div>
    <!--CHAIN-->

    <!-- article image -->

    <div class="article">
        <div class="container">
            <!-- ITEM -->
            <div class="infogallery__card max-width-none">
                <img src="<?php echo get_field("img", get_the_ID()); ?>" alt="">
                <div class="infogallery__blur">
                    <div class="infogallery__text d-flex">
                        <div class="info-wrap d-flex">
                            <h2 class="card__title"><?php the_title(); ?></h2>
                            <p class="card__text"><?php echo get_field("subtitle", get_the_ID()); ?></p>
                        </div>
                        <p class="card__price"><?php echo get_field("price", get_the_ID()); ?></p>
                    </div>
                </div>
            </div>
            <!-- END ITEM -->
        </div>
    </div>

    <!-- article info -->
    <div class="info">
        <div class="container">
            <div class="info__content">
                <h2 class="info__title"><?php echo get_field("title-before-main-text", get_the_ID()); ?></h2>
                <div class="info__text"><?php the_content(); ?></div>
            </div>
        </div>
    </div>
    <?php get_template_part( "template-parts/rs-flex-content/flex-content-want-to-work-form" ); ?>