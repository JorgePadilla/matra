<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">

<script src="scripts/mootools.v1.11.js" type="text/javascript"></script>
<script src="scripts/jd.gallery.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/jd.gallery.css" type="text/css" media="screen" /> 
<script src="scripts/jd.gallery.set.js" type="text/javascript"></script>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title>
<?php if(function_exists("UTW_ShowTagsForCurrentPost")) : ?>
<?php bloginfo('name'); ?>
<?php if ( is_single() ) { ?>
: Blog Archive
<?php } ?>
<?php if (is_tag()) { echo ' : '; UTW_ShowCurrentTagSet('tagsettextonly'); } ?>
<?php wp_title(':'); ?>
<?php else: ?>
<?php wp_title(); ?>
<?php bloginfo('name'); ?>
:
<?php bloginfo('description'); ?>
<?php endif; ?>
</title>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<!-- leave this for stats -->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head(); ?>

    <!--<style>
#wrapper 
{
padding-left:0px;
}
   </style>-->

<style type="text/css">
ul.ppt {
	position: relative;
}

.ppt li {
	list-style-type: none;
	position: absolute;
	top: 0;
	left: 0;
}

.ppt img {
	border: 0px solid #e7e7e7;
	padding: 0px;
	background-color: #ececec;
	margin-top:0px;

}
</style>

</head>
<body>
<div id="wrapper">
<div id="container">
<div id="header">
  <div id="header1">
    <div id="main_menu">
      <ul>
        <li<?php if ( is_home() || is_category() || is_archive() || is_search() || is_single() || is_date() ) { echo ' class="current"'; } ?>><a href="<?php echo get_settings('home'); ?>">Home</a></li>

        <li><?php wp_list_pages('sort_column=menu_order&depth=0&title_li=&exclude=3,15,18,20,22,24,26,207'); ?></li>

      </ul>


    </div>
    <div style="float:right; margin-top:-21px;margin-right:0px;text-decoration:none;">
     <a href="<?php bloginfo('url'); ?>?page_id=207" rel="bookmark" title="Links to related pages"> Links</a></div>
    <!--end of main_menu-->
    <div id="search_box">
      <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input name="s" type="text" class="search_field" value="<?php the_search_query(); ?>"/>
        <input name="search" type="image" src="<?php bloginfo('stylesheet_directory');?>/images/search_eng.png" class="search_button" alt="search" />
      </form>
    </div>
    <?php /*?>  <div style="float:right; margin-top:-21px;margin-right:-30px;text-decoration:none;">
     <a href="<?php bloginfo('url');?>?page_id=3" rel="bookmark" title="Ver Sitio en Espa&ntilde;ol"><img src="<?php bloginfo('template_url'); ?>/images/flag-espanol.jpg" alt="Ver Sitio en Espa&ntilde;ol" border="0" />Espa&ntilde;ol</a></div><?php */?>
  </div>
  <!--end of header1-->
  <?php /*?><div id="header2">
  <div class="logo_theme">
  <h1><a href="<?php echo get_settings('home'); ?>"><?php bloginfo('name'); ?></a></h1>
  </div><?php */?>
   <?php /*?> <div class="banner_468x60">  

<!-- your banner ad goes here -->
    
      <a href="http://loreleiwebdesign.com/solutions/web-hosting.php"><img src="<?php bloginfo('stylesheet_directory');?>/images/banner_468x60.gif" alt="banner_468x60"  border="0" /></a>


<!-- end of banner ad -->


    </div><?php */?>
  </div>
  <div class="banner_640">
  		
<ul class="ppt">

	<li><img src="<?php bloginfo('url'); ?>/wp-content/uploads/foto/header2_1.jpg" alt="MATRA"></img></li>
	<li><img src="<?php bloginfo('url'); ?>/wp-content/uploads/foto/header2_2.jpg" alt="MATRA"></img></li>
	<li><img src="<?php bloginfo('url'); ?>/wp-content/uploads/foto/header2_3.jpg" alt="MATRA"></img></li>
    <li><img src="<?php bloginfo('url'); ?>/wp-content/uploads/foto/header2_4.jpg" alt="MATRA"></img></li>
    <li><img src="<?php bloginfo('url'); ?>/wp-content/uploads/foto/header2_5.jpg" alt="MATRA"></img></li>
    <li><img src="<?php bloginfo('url'); ?>/wp-content/uploads/foto/header2_6.jpg" alt="MATRA"></img></li>
    <li><img src="<?php bloginfo('url'); ?>/wp-content/uploads/foto/header2_7.jpg" alt="MATRA"></img></li>
    <li><img src="<?php bloginfo('url'); ?>/wp-content/uploads/foto/header2_8.jpg" alt="MATRA"></img></li>
    <li><img src="<?php bloginfo('url'); ?>/wp-content/uploads/foto/header2_9.jpg" alt="MATRA"></img></li>
    <li><img src="<?php bloginfo('url'); ?>/wp-content/uploads/foto/header2_10.jpg" alt="MATRA"></img></li>
    <li><img src="<?php bloginfo('url'); ?>/wp-content/uploads/foto/header2_11.jpg" alt="MATRA"></img></li>
    <li><img src="<?php bloginfo('url'); ?>/wp-content/uploads/foto/header2_12.jpg" alt="MATRA"></img></li>
    <li><img src="<?php bloginfo('url'); ?>/wp-content/uploads/foto/header2_13.jpg" alt="MATRA"></img></li>
    <li><img src="<?php bloginfo('url'); ?>/wp-content/uploads/foto/header2_14.jpg" alt="MATRA"></img></li>
    <li><img src="<?php bloginfo('url'); ?>/wp-content/uploads/foto/header2_15.jpg" alt="MATRA"></img></li>
    <li><img src="<?php bloginfo('url'); ?>/wp-content/uploads/foto/header2_16.jpg" alt="MATRA"></img></li>
    <li><img src="<?php bloginfo('url'); ?>/wp-content/uploads/foto/header2_17.jpg" alt="MATRA"></img></li>
    <li><img src="<?php bloginfo('url'); ?>/wp-content/uploads/foto/header2_18.jpg" alt="MATRA"></img></li>
    <li><img src="<?php bloginfo('url'); ?>/wp-content/uploads/foto/header2_19.jpg" alt="MATRA"></img></li>
    <li><img src="<?php bloginfo('url'); ?>/wp-content/uploads/foto/header2_20.jpg" alt="MATRA"></img></li>
    <li><img src="<?php bloginfo('url'); ?>/wp-content/uploads/foto/header2_21.jpg" alt="MATRA"></img></li>
    <li><img src="<?php bloginfo('url'); ?>/wp-content/uploads/foto/header2_22.jpg" alt="MATRA"></img></li>
    
</ul>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript">
$('.ppt li:gt(0)').hide();
$('.ppt li:last').addClass('last');
var cur = $('.ppt li:first');

function animate() {
	cur.fadeOut( 1000 );
	if ( cur.attr('class') == 'last' )
		cur = $('.ppt li:first');
	else
		cur = cur.next();
	cur.fadeIn( 1000 );
}


$(function() {
	setInterval( "animate()", 5000 );
} );
</script>

</div>
