<?php get_header(); ?>

<div id="content">
<div class="articles">
  <div id="post">
    <?php if(have_posts()) : ?>
    <h2>Browsing <?php echo single_cat_title(); ?>'s Archives&nbsp;&raquo;&raquo;</h2>
    <?php while(have_posts()) : the_post(); ?>

      <h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
      <?php the_title(); ?>
      </a></h1>


   



    <div class="post_content">
      <?php the_content("<br />" . "Read more &nbsp;" . "&quot;" . the_title('', '', false) . "&quot;"); ?>




<div class="links">

  <div class="comment">
  <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>
   </div>

 <div class="cat">
 Filed under: <?php the_category(', ') ?>
  </div><br />
   
<div class="feed">
 <a href="<?php bloginfo('rss2_url'); ?>">RSS</a>
  </div>
                       


<div class="clock">
 Posted on: <?php the_time('F jS, Y') ?>
  </div>

</div>










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
    <h2>The category had been deleted</h2>
    <?php endif; ?>
  </div>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
