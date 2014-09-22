<?php get_header(); ?>

<div id="content">
<div class="articles">
  <div id="post">
    <?php if (have_posts()) : ?>
    <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
    <?php /* If this is a category archive */ if (is_day()) { ?>
    <h2 id="main-title">Archive for
      <?php the_time('F jS, Y'); ?>
    </h2>
    <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
    <h2 id="main-title">Archive for
      <?php the_time('F, Y'); ?>
    </h2>
    <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
    <h2 id="main-title">Archive for
      <?php the_time('Y'); ?>
    </h2>
    <?php /* If this is a search */ } elseif (is_search()) { ?>
    <h2 id="main-title">Search Results</h2>
    <?php /* If this is an author archive */ } elseif (is_author()) { ?>
    <h2 id="main-title">Author Archive</h2>
    <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
      <h2 id="main-title">Blog Archives</h2>
      <?php } ?>
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
    <h2>The archive had been deleted</h2>
    <?php endif; ?>
  </div>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
