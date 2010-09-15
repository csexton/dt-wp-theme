<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<title><?php wp_title(''); ?> <?php if ( !(is_404()) && (is_single()) or (is_page()) or (is_archive()) ) { ?> :: <?php } ?> <?php bloginfo('name'); ?></title>

	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

    <link href="<?php bloginfo('stylesheet_directory'); ?>/stylesheets/blueprint/screen.css" media="all" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo('stylesheet_directory'); ?>/stylesheets/blueprint/print.css" media="print" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo('stylesheet_directory'); ?>/stylesheets/blueprint/plugins/fancy-type/screen.css" media="all" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo('stylesheet_directory'); ?>/stylesheets/blueprint/plugins/buttons/screen.css" media="all" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo('stylesheet_directory'); ?>/stylesheets/all.css" media="screen" rel="stylesheet" type="text/css" />
    <!--[if IE]>
    <link href="<?php bloginfo('stylesheet_directory'); ?>/stylesheets/blueprint/ie.css" media="all" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/stylesheets/site.css" media="screen" rel="stylesheet" type="text/css" />



	<!-- Show the grid and baseline  -->
	<style type="text/css">
/*		.container { background: url(<?php bloginfo('stylesheet_directory'); ?>/css/lib/img/grid.png); } */
	</style>

	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_head(); ?>

    <script src="<?php bloginfo('stylesheet_directory'); ?>/javascripts/jquery.js" type="text/javascript"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/javascripts/jquery-ui.js" type="text/javascript"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/javascripts/jrails.js" type="text/javascript"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/javascripts/application.js" type="text/javascript"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/javascripts/jquery.tweet.js" type="text/javascript"></script>

    <script type='text/javascript'>
      jQuery(document).ready(function($) {
          jQuery(".tweet").tweet({
            join_text: "auto",
            username: "districttaco",
            avatar_size: 48,
            count: 5,
            auto_join_text_default: "we said,", 
            auto_join_text_ed: "we",
            auto_join_text_ing: "we were",
            auto_join_text_reply: "we replied",
            auto_join_text_url: "we were checking out",
            loading_text: "loading tweets..."
          });
        });
    </script>


</head>
<body bgcolor="#FFEFB5">

      <div class="container">
      <div class="clearfix">
  <div class="span-7 append-1">
    <img class="logo" alt="District Taco Logo" width="316" height="206" src="/wp-content/themes/districttaco/images/logo_resturant.png" />
  </div>
  <div class="top_box span-6 append-1">
    <br />
    <br />
    <div class="">
      <h3 class="top_title"> Lunch can be Special Too </h3>
      <p>
        We have a new lunch special everyday, follow us on <a href="http://twitter.com/districttaco">twitter</a> or friend us on <a href="http://www.facebook.com/districttaco">facebook</a> to find out what is being served.
      </p>
    </div>
  </div>
  <div class="top_box span-7 last">
    <br />
    <br />
    <h3 class="top_title">Locations We Like to Frequent</h3>
    <p>
      Crystal City in the little island between <a href="http://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=&sll=38.853205,-77.049913&sspn=0.000679,0.001204&ie=UTF8&ll=38.85329,-77.049863&spn=0.000679,0.001204&t=h&z=20">23rd ST and Crystal Drive</a>. Rosslyn on <a href="http://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=1752+North+Lynn+Street+Rosslyn,+VA+22209&sll=38.895692,-77.070841&sspn=0.001346,0.001706&gl=us&ie=UTF8&hq=&hnear=1752+N+Lynn+St,+Arlington,+Virginia+22209&ll=38.895559,-77.070798&spn=0.001346,0.001706&z=19">N Lynn St just north of Wilson Blvd </a>.
    </p>
  </div>
</div>

	
	<!-- Navigation 
  <div class="column span-12 first large" id="nav">
			<div class="content">
				<ul>
					<li class="<?php if (((is_home()) && !(is_paged())) or (is_archive()) or (is_single()) or (is_paged()) or (is_search())) { ?>current_page_item<?php } else { ?>page_item<?php } ?> first"><a href="<?php echo get_settings('home'); ?>">Home</a></li>
					<?php wp_list_pages('sort_column=menu_order&depth=1&title_li='); ?>
				</ul>
			</div>
  </div>
	<!-- End Navigation -->

