<?php get_header(); ?>

<div id="content">
<div class="articles">
  <div id="post">
    <?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
    <h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
      <?php the_title(); ?>
      </a></h1>


    

    <div class="post_content">

<?php include(TEMPLATEPATH."/thumbnail.php"); ?>
      <?php the_content(); ?>


<div class="links">

  <div class="comment">
<?php /*?>  <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?><?php */?>
   </div>

 <div class="cat">
<?php /*?> Filed under: <?php the_category(', ') ?><?php */?>
  </div><br />
   
<div class="feed">
<?php /*?> <a href="<?php bloginfo('rss2_url'); ?>">RSS</a><?php */?>
  </div>
                       


<div class="clock">
<?php /*?> Posted on: <?php the_time('F jS, Y') ?><?php */?>
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
    <?php if(function_exists("wp23_related_posts")) : ?>
    <div class="related_stuff">
      <?php wp23_related_posts(); ?>
    </div>
    <?php endif; ?>
    <?php comments_template(); ?>
    <?php else : ?>
    <h2>The topic had been deleted</h2>
    <?php endif; ?>
  </div>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
