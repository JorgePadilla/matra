<?php get_header(); ?>

<div id="content">
<div class="articles">
  <div id="post">
    <?php if(have_posts()) : ?>
    <h2>Resultados de la busqueda &quot;
      <?php the_search_query(); ?>
      &quot;</h2>
    <?php while(have_posts()) : the_post(); ?>
    <h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
      <?php the_title(); ?>
      </a></h1>
   <?php /*?> <div class="post_banner"> <span class="comment"> <a href="<?php comments_link(); ?>">
      <?php comments_number('no comment','1 comment','% comments'); ?>
      </a> </span> <span class="author">Posted by
      <?php the_author_posts_link(); ?>
      </span></div><?php */?>
    <div class="post_content">
      <?php the_excerpt(); ?>
    </div>
   <?php /*?> <div class="category">Published under
      <?php the_category(', ') ?>
      <?php edit_post_link('Edit', '&#124; ', ''); ?>
      |&nbsp;<a href="mailto:?Subject=Check This Out&amp;body=An Interesting Post: <?php echo the_permalink(); ?>">send this post</a> </div><?php */?>
    <div class="meta">
 <?php /*?>     <?php the_time('F jS, Y') ?><?php */?>
    </div>
    <?php if(function_exists("UTW_ShowTagsForCurrentPost")) : ?>
    <div class="post_tag">
      <?php UTW_ShowTagsForCurrentPost("commalist", array('last'=>' and %taglink%', 'first'=>'Tagged in %taglink%',)) ?>
    </div>
    <?php else : ?>
    <div class="post_tag">
      <?php the_tags() ?>
    </div>
    <?php endif; ?>
    <?php endwhile; ?>
    <div id="post_navigator">
      <?php if(function_exists("wp_pagenavi")) { ?>
      <?php wp_pagenavi(); ?>
      <?php } else { ?>
      <?php posts_nav_link() ?>
      <?php } ?>
    </div>
    <?php else : ?>
    <h2>We do not found anything matched your search</h2>
    <?php endif; ?>
  </div>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
