<?php get_header(); ?>
    <div class="contentsWrap">
        <div class="mainContents oneColumn">
        <?php
        if ( have_posts() ) :
          while ( have_posts() ) : the_post();
          ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
              <h1 class="type-A"><?php the_title(); ?></h1>
        </div><!-- /.mainContents -->
    </div><!-- /.contentsWrap -->
<?php get_footer(); ?>
