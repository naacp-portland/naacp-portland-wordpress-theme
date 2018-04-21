<?php
/*
Template Name: Home
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

	<div class="c-hero callout large text-center">
	       <h1>Ensuring the <span>political</span>, <span>educational</span>, <span>social</span> and <span>economic equality of rights</span> of all persons and to <span>eliminate racial hatred and discrimination</span></h1>
      <div class="expanded stacked-for-small button-group button-group--home-cta">
        <a class="button">Learn more</a>
        <a class="button hollow">Join us</a>
      </div>
      <br><br><br><br><br>
	</div>

<<<<<<< HEAD
    <div class="module-events callout large grid-x">
      <div class="module-events__header callout text-center next-meeting small-10">
        <h3>Next general session</h3>
        <a href="/event/naacp-general-meeting/all/"><h2>Every 4th Saturday</h2>
        <h5><span>12-2 PM</span> | Click for Location</h5></a>
		</div>
	<div class="grid-x grid-margin-x events-news"><!--dpc-added container for events plus news-->
      <div class="module-events__events political-action medium-12 large-4 cell" >
				<h2 class="text-left events">Events</h2>
        <div class="module-events__event political-action">
          <div class="module-events__event-content">
            <a>10/08</a>
            <h5>Political Action Committee Meeting</h5>
=======
  <div class="grid-x module-events callout large">
    <div class="module-events__header callout text-center next-meeting small-10">
      <h3>Next general session</h3>
      <h2>Sunday, August 27th</h2>
      <h5><span>12-2 PM</span> | Concordia University Hall</h5>
      <div class="large button-group stacked-for-small align-center button-group--home-meeting">
        <a class="button">RSVP on F</a>
        <a class="button hollow">More info</a>
      </div>
    </div>
	</div>
	<div class="grid-container events-news"><!--dpc-added container for events plus news-->
    <div class="grid-x grid-padding-x">

        <div class="module-events__events political-action cell medium-12 large-4" >
  				<h2 class="cell text-left events">Events</h2>
          <div class="cell module-events__event political-action">
            <div class="module-events__event-content">
              <a>10/08</a>
              <h5>Political Action Committee Meeting</h5>
            </div>
            <div class="module-events__event-cta">
              <a class="button small">></a>
            </div>
>>>>>>> cdb80116a614e1bdbf52dadf2c0cf89fdd198ccf
          </div>
          <div class="cell module-events__event political-action">
            <div class="module-events__event-content">
              <a>10/08</a>
              <h5>Political Action Committee Meeting</h5>
            </div>
            <div class="module-events__event-cta">
              <a class="button small">></a>
            </div>
          </div>
          <div class="cell module-events__event political-action">
            <div class="module-events__event-content">
              <a>10/08</a>
              <h5>Political Action Committee Meeting</h5>
            </div>
            <div class="module-events__event-cta">
              <a class="button small">></a>
            </div>
          </div>
          <div class="cell module-events__event political-action">
            <div class="module-events__event-content">
              <a>10/08</a>
              <h5>Political Action Committee Meeting</h5>
            </div>
            <div class="module-events__event-cta">
              <a class="button small">></a>
            </div>
          </div>
        </div>
      

        <?php $the_query = new WP_Query( 'posts_per_page=4' ); ?>
        <div class="module-news cell medium-12 large-8">
          <h2 class="text-left latest-news cell">Latest news</h2>
          <div class="grid-x grid-padding-x small-up-2">
            <?php while ($the_query -> have_posts()): $the_query -> the_post(); ?>
              <div class="module-news__news-item cell">
                <div class="module-news__news-item-content">
                  <p class="date"><?php the_time( get_option( 'date_format' )); ?></p>
                  <h5><?php the_title(); ?></h5>
                  <p><?php the_excerpt(__('more...)')); ?></p>
                </div>
                <div class="module-news__news-item-cta">
                  <a class="button hollow news expanded" href="<?php the_permalink(); ?>">Read more ></a>
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
