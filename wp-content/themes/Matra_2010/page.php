<?php get_header(interna); ?>


<div id="content">
<div class="articles">
<div id="post">
<?php if(have_posts()) : ?>

<?php while(have_posts()) : the_post(); ?>

<h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>



<div class="post_content">
<?php the_content(); ?>
</div>


<?php endwhile; ?>


<div id="post_navigator"><?php link_pages('<strong>Pages:</strong> ', '', 'number'); ?></div>

<?php else : ?>

<h2>The page had been deleted</h2>

<?php endif; ?>



</div>

<?php get_sidebar(); ?>

</div>


<?php get_footer(); ?>