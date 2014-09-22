<?php get_header(); ?>

<div id="content">
<div class="articles">
  <div id="post">
    <?php if(have_posts()) : ?>
    <h2>Browsing Tags's Archives&nbsp;&raquo;&raquo;</h2>
    <?php while(have_posts()) : the_post(); ?>
    <h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
      <?php the_title(); ?>
      </a></h1>
    <div class="post_banner"> <span class="comment"> <a href="<?php comments_link(); ?>">
      <?php comments_number('no comment','1 comment','% comments'); ?>
      </a> </span> <span class="author">Posted by
      <?php the_author_posts_link(); ?>
      </span></div>
    <div class="post_content">
      <?php the_content("<br />" . "read more from&nbsp;" . "&quot;" . the_title('', '', false) . "&quot;"); ?>
    </div>
    <div class="category">Published under
      <?php the_category(', ') ?>
      <?php edit_post_link('Edit', '&#124; ', ''); ?>
      |&nbsp;<a href="mailto:?Subject=Check This Out&amp;body=An Interesting Post: <?php echo the_permalink(); ?>">send this post</a> </div>
    <div class="meta">
      <?php the_time('F jS, Y') ?>
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
    <h2>The tag had been deleted</h2>
    <?php endif; ?>
  </div>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
