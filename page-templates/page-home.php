<?php
/*
Template Name: Home
*/
get_header(); ?>

<?php // get_template_part( 'template-parts/featured-image' ); ?>

<div class="c-hero callout large text-center">
    <h1>Ensuring the <span>political</span>, <span>educational</span>, <span>social</span> and <span>economic equality of rights</span> of all persons and <span>eliminating racial hatred and discrimination</span></h1>
    <div class="expanded stacked-for-small button-group button-group--home-cta">
      <a class="button" href="<?php echo get_site_url(); ?>/about/committees/" title="Learn more">Learn more</a>
      <a class="button hollow" href="<?php echo get_site_url(); ?>/get-involved/" title="Get involved">Join us</a>
    </div>
</div>

<div class="grid-x module-events callout large">
  <div class="module-events__header callout text-center next-meeting small-10">
      <h4 class="black">Next general meeting</h4>
      <h1>Saturday, June 23rd</h1>
      <h3>12-2 PM, <a href="https://goo.gl/maps/G35L17cejFH2" target="_blank" title="Map to NAACP Offices - 1257 Lloyd Center Portland, OR">NAACP Offices</a> <span class="small">(inside Lloyd Center)</span></h3>
      <a class="button" href="<?php echo get_site_url(); ?>/calendar">See the Calendar</a>
	</div>
</div>
<div class="grid-container events-news"><!--dpc-added container for events plus news-->
  <div class="grid-x grid-margin-x">

      <div class="module-events__events cell medium-12 large-4" >
				<h2 class="cell text-left events">Events&nbsp;&nbsp;<a href="<?php echo get_site_url(); ?>/events" title="View all events"><span>View All</span></a></h2>
        <?php dynamic_sidebar( 'home-page-events-widget' ); ?>
      </div>
    

      <?php $the_query = new WP_Query( 'posts_per_page=4' ); ?>
      <div class="module-news cell medium-12 large-8">
        <h2 class="text-left latest-news cell">Latest news&nbsp;&nbsp;<a href="/news/"><span>View All</span></a></h2>
        <!-- <div id="xfactor-callout" class="small-12">
          <a href="<?php echo esc_url(home_url('')); ?>/2018/05/16/ilyasah-shabazz-the-daughter-of-malcolm-x-comes-to-portland-to-help-the-naacp-honor-him/" title="Ilyasah Shabazz comes to Portland to help NAACP honor her father, Malcolm X" alt="X-Factor Brunch Ad" target="_self">
            <img src="<?php echo esc_url(home_url('')); ?>/wp-content/uploads/2018/05/x-factor1.jpg" alt="Ilyasah Shabazz comes to Portland to help NAACP honor her father, Malcolm X" />
          </a>
        </div> -->
        <div class="grid-x grid-margin-x small-up-1 medium-up-2">
          <?php while ($the_query -> have_posts()): $the_query -> the_post(); ?>
            <div class="module-news__news-item cell">
              <div class="module-news__news-item-content">
                <h4 class="date"><?php the_time( get_option( 'date_format' )); ?></h4>
                <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>">Read article</a> <span>»</span>
                <hr class="light-grey-hr" />
              </div>
            </div><!--end cell-->
          <?php endwhile; ?>
        </div>
      </div>

  </div>
	
</div><!--end events-news-container-->

	

<?php wp_reset_postdata(); ?>
<div class="cta-photos">
</div>

<?php get_footer();
