<?php get_header() ?>
 <div class="jumbotron" id="header-image">
     <h1 class="text-center"><?php bloginfo('name') ?></h1>
 </div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div id="wrapper-front">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php get_template_part( 'content', get_post_format() ); ?>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer() ?>
