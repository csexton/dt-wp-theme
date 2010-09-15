<?php get_header(); ?>

<div id="page">

<div class="protent info clearfix">
  <div class="span-15 append-1">
    <div class="span-6 prepend-1 append-1">
      <!-- Column 1 -->
      <h3>Good Food for Hungry People</h3>
      <p>
        Homemade Salsa, quality ingredients, freshly prepared and served hot in healthy portions. 
        This is a fast breakfast that does not taste like it was fast.
      </p>
      <h3>Let us Cater for You</h3>
      <p>
        Available for <a href="/catering">parties and catering</a> please <a href="mailto:taco@districttaco.com">Contact us</a> for details, or view our <a href="/menu">menu</a>. Click <a href="/orderform.pdf">here</a> to download the order form.
      </p>
      <hr />

      <div class="quote"> 
        "Simple, yes, but undeniably tasty, as each ingredient plays a role in the sophisticated balance of this humble snack."
      </div>
      <p class="cite">- City Paper, November 2009 </p>

      <div class="quote"> 
        "This is about as good as it gets."
      </div>
      <p class="cite">- Peter M. from Arlington, VA (<a href="http://www.yelp.com/biz/district-taco-arlington#hrid:s32YoBr9lg1yl_U6NnjWaw">Yelp!</a>) </p>
      <?php get_sidebar(); ?>
    </div>

    <div class="span-7 last">
      <!-- Column 2 -->
      	<?php 
      	
      		//$my_query = new WP_Query('showposts=8');
      		//while ($my_query->have_posts()) : $my_query->the_post();
      		
      		// Don't show featured item
      		//if ($post->ID == $featuredID) continue;
      		
      		while (have_posts()) : the_post();
      		
      		?>
      		
      		<?php getPost($post); ?>
      			
      		<?php endwhile; ?>
    
        <div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
        <div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
    </div>
  </div>

  <div class="span-7 last">
    <!-- Column 1 -->
    <h6 style="text-align: right;">
      <a href="http://twitter.com/districttaco">Follow us on Twitter</a>
    </h6>
    <div class='tweet'></div>
  </div>
</div>

</div class="protent info clearfix">
</div> <!-- /page -->

<?php get_footer(); ?>
