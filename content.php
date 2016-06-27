<div class="post-case">
	<?php if (has_post_thumbnail()) {
		?>
		<div class="text-center" id="feature-image-frame">
			<a href="<?php the_permalink()?>"><?php  the_post_thumbnail('', array('class' => 'feature-image'));
				?></a>
		</div>
		<?php
	} else { ?>
		<div class="text-center" id="feature-image-frame">
<!--			<a href="--><?php //the_permalink()?><!--"><img class="feature-image" src="--><?php //bloginfo('template_directory'); ?><!--/img/default_feature_image.png" /></a>a-->
		</div>
		<?php
	}?>






	<div class="post-context">
        <div class="text-center">
            <a id="title-link" href="<?php the_permalink() ?>" ><h3><?php the_title(); ?></h3></a>
            <label for=""><?php the_time('F j, Y') ?> | by <?php the_author(); ?> </label>
            <h5 class="post-comment">
                <label for="">Comments : <?php $commentscount = get_comments_number(); echo $commentscount; ?></label>
            </h5>
        </div>
        <div class="post-meta">
            <p>
                <?php
                $content = get_the_content();
                echo wp_trim_words( $content , '30' );
                ?>
            </p>
        </div>
    </div>
</div>